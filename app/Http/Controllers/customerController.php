<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_customer;
use Datatables;

class customerController extends Controller
{
    public function index(request $request)
    {
        if ($request->ajax()) {
            $data = data_customer::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action','customer.action')
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('customer.index');
    }

    public function create() 
    {
        return view('customer.create');
    }

    public function store(request $request) {
        $request->validate(
            [
                'namacustomer' => 'required',
                'alamatcustomer' => 'required',
            ]
        );
        $datacustomer = new data_customer;
        $datacustomer->nama_customer = $request->namacustomer;
        $datacustomer->alamat_customer = $request->alamatcustomer;
        $datacustomer->email = $request->email;
        $datacustomer->nomor_hp = $request->nomorhp;
        $datacustomer->save();
        return redirect()->route('datacustomer.list')->with('success','Data Customer Berhasil di Inputkan');
    }

    public function edit(data_customer $datacustomer) {
        return view('customer.edit',compact('datacustomer'));
    }

    public function update(request $request, $id) {
        $request->validate(
            [
                'namacustomer' => 'required',
                'alamatcustomer' => 'required',
            ]
        );
        $datacustomer = data_customer::find($id);
        $datacustomer->nama_customer = $request->namacustomer;
        $datacustomer->alamat_customer = $request->alamatcustomer;
        $datacustomer->email = $request->email;
        $datacustomer->nomor_hp = $request->nomorhp;
        $datacustomer->save();
        return redirect()->route('datacustomer.list')->with('success','Data Customer Berhasil di Update');
    }

    public function destroy(request $request) {
        $data = data_customer::where('id',$request->id)->delete();
        return Response()->json($data);
    }

}
