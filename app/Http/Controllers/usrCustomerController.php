<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_customer;
use Yajra\DataTables\Facades\DataTables;

class usrCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {  
        $displaydata = data_customer::all();
        return view('customer', compact('displaydata'));
    }
}
