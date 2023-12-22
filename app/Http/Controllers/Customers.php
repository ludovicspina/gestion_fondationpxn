<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Customers extends Controller
{
    public function getData()
    {
        $customers = DB::table('customers')
            ->select('*')
            ->get();

        return view('customers', compact('customers'));
    }

    public function addCustomer(Request $request)
    {
        $post = new Customer();
        $post->name = $request->input('name');
        $post->reference = $request->input('reference');
        $post->city = $request->input('city');
        $post->postal_code = $request->input('postal_code');
        $post->adress = $request->input('adress');
        $post->phone = $request->input('phone');
        $post->mail = $request->input('mail');
        $post->siret = $request->input('siret');
        $post->save();

        return redirect('customers')->with('status', 'Client ajouté.');
    }
}
