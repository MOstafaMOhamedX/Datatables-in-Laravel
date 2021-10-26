<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class APIController extends Controller
{
    public function getCustomers()
    {
        
        $query = Customer::select('first_name', 'last_name', 'email');
        return datatables($query)->make(true);
        
    }
}
