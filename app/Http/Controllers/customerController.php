<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_customer;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {  
        $displaydata = data_customer::all();
        return view('/data-customer/list-data', compact('displaydata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        return view('/data-customer/input-data');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'customer' => 'required',
            'cust_type' => 'required',
            'area' => 'required',
            'unit' => 'required',
            'no_idc' => 'required'
        ]);
        $displaydata = data_customer::create($validatedData);

         if ($displaydata) {
            return redirect()->route('data-customer.index')
            ->with(['sucess' => 'Data Customer Berhasil Di Simpan']);
        }
        else {
            return redirect()->route('data-customer.index')
            ->with(['error' => 'Data Customer Gagal Di Simpan']);
        }
}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dc = data_customer::findOrFail($id);
        return view('/data-customer/edit-data',compact('dc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'customer' => 'required',
            'cust_type' => 'required',
            'area' => 'required',
            'unit' => 'required',
            'no_idc' => 'required'
        ]);
        $displaydata = data_customer::whereId($id)->update($validatedData);

        if ($displaydata) {
            return redirect()->route('data-customer.index')
            ->with(['sucess' => 'Data Customer Berhasil Di Update']);
        }
        else {
            return redirect()->route('data-customer.index')
            ->with(['error' => 'Data Customer Gagal Di Update']);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $displaydata = data_customer::findOrFail($id);
        $displaydata->delete();
        
        if ($displaydata) {
            return back()->with(['success' => 'Data Customer Berhasil Di Hapus']);;
        }
        else {
            return back()->with(['error' => 'Data Customer Gagal Di Hapus']);;
       }

    }

    public function listdata(Request $request) 
    {
        $displaydata = data_customer::all();
        return view('/data-customer/datatables-customer', compact('displaydata'));

    }
}