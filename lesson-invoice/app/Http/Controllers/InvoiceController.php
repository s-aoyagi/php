<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Invoice; # 忘れずに追加
use Illuminate\Http\Request;

class InvoiceController extends Controller
{

    private $invoice;

    public function __construct(Invoice $invoice)
    {
        $this->invoice = $invoice;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $invoices = $this->invoice->all();
        return view('invoice.index',compact('invoices'));
    }
}
