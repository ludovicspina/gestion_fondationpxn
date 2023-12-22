<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Invoices extends Controller
{
    public function getData()
    {
        $customers = DB::table('customers')
            ->select('id', 'name')
            ->get();

        $invoices = DB::table('invoices')
            ->select('*')
            ->get();

        return view('invoices', compact('customers', 'invoices'));
    }

    public function addInvoice(Request $request)
    {
        $post = new Invoice();
        $post->number = $request->input('number');
        $post->customer_id = $request->input('customer_id');
        $post->release = $request->input('release');
        $post->deadline = $request->input('deadline');
        $post->description = $request->input('description');
        $post->save();

        return redirect('invoices')->with('status', 'Facture ajoutée.');
    }
}
