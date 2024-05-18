<?php

namespace App\Http\Controllers;

use App\Models\HoaDon;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CRUDInvoicesController extends Controller
{
    // In your controller
    public function viewInvoices()
    {
        $invoices = HoaDon::all(); // Assuming your model is named 'HoaDon'

        return view('crud-car.listInvoices', ['invoices' => $invoices]);
    }
    public function deleteInvoice($id)
{
    $invoice = HoaDon::find($id); // Assuming your model is named 'HoaDon'
    
    if($invoice) {
        $invoice->delete();
        return redirect()->back()->with('success', 'Invoice deleted successfully');
    } else {
        return redirect()->back()->with('error', 'Invoice not found');
    }
}
}
