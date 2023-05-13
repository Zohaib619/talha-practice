<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function view_customer()
    {

        return view('customer.list');
    }
}
