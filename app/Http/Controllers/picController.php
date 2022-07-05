<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_pic;

class picController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $displaydata = data_pic::all();
        return view('/data-pic/list-data', compact('displaydata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/data-pic/input-data');
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
            'nama' => 'required',
            'posisi' => 'required',
            'no_idp' => 'required'
        ]);
        $displaydata = data_pic::create($validatedData);

         if ($displaydata) {
            return redirect()->route('data-pic.index')
            ->with(['sucess' => 'Data PIC Berhasil Di Simpan']);
        }
        else {
            return redirect()->route('data-pic.index')
            ->with(['error' => 'Data PIC Gagal Di Simpan']);
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dc = data_pic::findOrFail($id);
        return view('/data-pic/edit-data',compact('dc'));
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
            'nama' => 'required',
            'posisi' => 'required',
            'no_idp' => 'required'
        ]);
        $displaydata = data_pic::whereId($id)->update($validatedData);

         if ($displaydata) {
            return redirect()->route('data-pic.index')
            ->with(['sucess' => 'Data PIC Berhasil Di Update']);
        }
        else {
            return redirect()->route('data-pic.index')
            ->with(['error' => 'Data PIC Gagal Di Update']);
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
        $displaydata = data_pic::findOrFail($id);
        $displaydata->delete();
        
        if ($displaydata) {
            return back()->withInput(['success' => 'Data Customer Berhasil Di Hapus']);;
        }
        else {
            return back()->withInput(['error' => 'Data Customer Gagal Di Hapus']);;
       }
    }

    public function listdata(Request $request) 
    {
        $displaydata = data_pic::all();
        return view('/data-pic/datatables-pic', compact('displaydata'));
    }

}
