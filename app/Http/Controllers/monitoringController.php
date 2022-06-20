<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_monitoring;
use App\Models\data_customer;
use App\Models\data_pic;

class monitoringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $displaydata = data_monitoring::all();
        return view('/data-monitoring/list-data', compact('displaydata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datacust = data_customer::select('no_idc','unit')->get();
        $datapic_idpni = data_pic::select('no_idp','nama')->where('no_idp', 'LIKE', '%IDPNI%')->get();
        $datapic_idpre = data_pic::select('no_idp','nama')->where('no_idp', 'LIKE', '%IDPRE%')->get();
        $datapic_idppm = data_pic::select('no_idp','nama')->where('no_idp', 'LIKE', '%IDPPM%')->get();
        return view('/data-monitoring/input-data', compact('datacust','datapic_idpni','datapic_idpre','datapic_idppm'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $displaydata = data_monitoring::create([
            'no_idm' => $request->no_idm,
            'no_idn' => $request->no_idn,
            'no_idc' => $request->no_idc,
            'no_ids' => $request->no_ids,
            'nm_pekerjaan' => $request->nm_pekerjaan,
            'rkap' => $request->rkap,
            'stts_pkerjaan' => $request->sts_pkerjaan,
            'no_idpre' => $request->no_idpre,
            'no_idpni' => $request->no_idpni,
            'no_idppm' => $request->no_idppm,
            'prktype' => $request->prktype,
            'no_PRKorWO' => $request->no_PRKorWO,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_akhir' => $request->tgl_akhir,
            'stts_admin' => $request->stts_admin,
            'ket_progress' => $request->ket_progress
        ]);

         if ($displaydata ) {
            return redirect()->route('data-monitoring.index')
            ->with(['sucess' => 'Data Customer Berhasil Di Simpan']);
        }
        else {
            return redirect()->route('data-monitoring.index')
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
