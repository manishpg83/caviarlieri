<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrderInvoice;

class InvoiceController extends Controller
{
    public function index()
    {
        return view('admin.invoice.index');
    }

    public function show($id)
    {
        $invoice = OrderInvoice::findOrFail($id);

        return view('admin.invoice.show', compact('invoice'));
    }
}
