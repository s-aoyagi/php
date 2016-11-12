<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Todo; # 忘れずに追加
use Illuminate\Http\Request;

class TodoController extends Controller
{
  private $todo;

  public function __construct(Todo $todo)
  {
    $this->todo = $todo;
  }

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $todos = $this->todo->all();
    return view('todo.index',compact('todos'));
  }

  public function create()
  {
    return view('todo.create');
  }

  public function store(Request $request)
  {
    $input =  $request->all();
    $this->todo->fill($input);
    $this->todo->save();

    return redirect()->to('todo');
  }

  public function edit($id)
    {
        $todo = $this->todo->find($id);
        return view('todo.edit')->with(compact('todo'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $this->todo->where('id', $id)->update(['title' => $input['title']]);

        return redirect()->to('todo');
    }
    public function destroy($id)
    {
        $data = $this->todo->find($id);
        $data->delete();

        return redirect()->to('todo');
    }
}
