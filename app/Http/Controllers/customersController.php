<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customersController extends Controller
{

    public function Customers()
    { //website.clint register insert
        return view('customers.addcustomer');
    }
    public function CreateCustomers(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email|unique:customers,email',
                'phonenumber' => 'required',
                'cnic' => 'required',
                'gender' => 'required',
                'customertype' => 'required',
                'address' => 'required',
                'country' => 'required',
                'city' => 'required',
                'citycode' => 'required'
            ],
            [
                'name.required' => 'The name field is required.',
                'email.required' => 'The email field is required.',
                'email.email' => 'The email must be a valid email address.',
                'email.unique' => 'This email already exists.',
                'phonenumber.required' => 'The phone number field is required.',
                'cnic.required' => 'The CNIC number field is required.',
                'gender.required' => 'The gender field is required.',
                'customertype.required' => 'The customer type field is required.',
                'address.required' => 'The address field is required.',
                'country.required' => 'The country field is required.',
                'city.required' => 'The city field is required.',
                'citycode.required' => 'The city code field is required.'
            ]
        );
        print_r($request->all());
    }
    public function ViewCustomers()
    { //website.clint register insert
        return view('customers.viewcustomer');
    }

}
