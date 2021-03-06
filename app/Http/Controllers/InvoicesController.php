<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

class InvoicesController extends Controller
{
    public function index()
    {
        $invoices = Invoice::all();


        return view('invoices.index',compact('invoices'));
    }

    public function create()
    {
        return view('invoices.create');
    }
}
