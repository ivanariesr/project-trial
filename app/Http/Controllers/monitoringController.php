<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\data_monitoring;
use App\Models\data_surat;
use App\Models\data_nilai;
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

        $validator = Validator::make($request->all(), [
            'no_idm' => 'required',
            'no_idn' => 'required',
            'no_idc' => 'required',
            'no_ids' => 'required',
            'no_idpre' => 'required',
            'no_idpni' => 'required',
            'no_idppm' => 'required',
            'nm_pekerjaan' => 'required|unique:data_monitorings',
            'rkap' => 'required',
            'stts_pkerjaan' => 'required',
            'prktype' => 'required',
            'no_PRKorWO' => 'required',
            'stts_admin' => 'required'
        ]);
        
         if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }
        else {
            $Mon = data_monitoring::create($request->all());
            $Sur = data_surat::create($request->all());
            $Nil = data_nilai::create($request->all());
/*
            $Mon = new data_monitoring();
            $Mon->no_idm = $request->no_idm;
            $Mon->no_idn = $request->no_idn;
            $Mon->no_idc = $request->no_idc;
            $Mon->no_idpre = $request->no_idpre;
            $Mon->no_idpni = $request->no_idpni;
            $Mon->no_idppm = $request->no_idppm;
            $Mon->no_ids = $request->no_ids;
            $Mon->prktype = $request->prktype;
            $Mon->no_PRKorWO = $request->no_PRKorWO;
            $Mon->nm_pekerjaan = $request->nm_pekerjaan;
            $Mon->rkap = $request->rkap;
            $Mon->stts_pkerjaan = $request->stts_pkerjaan;
            $Mon->tgl_mulai = $request->tgl_mulai;
            $Mon->tgl_akhir = $request->tgl_akhir;
            $Mon->stts_admin = $request->stts_admin;
            $Mon->ket_progress = $request->ket_progress;
            $Mon->save();

            $Sur = new data_surat();
            $Sur->no_ids = $request->no_ids;
            $Sur->no_penugasan = $request->no_penugasan;
            $Sur->tgl_penugasan = $request->tgl_penugasan;
            $Sur->dok_penugasan = $request->dok_penugasan;
            $Sur->noba_kspktn = $request->noba_kspktn;
            $Sur->tglk_dok = $request->tglk_dok;
            $Sur->dok_kspktn = $request->dok_kspktn;
            $Sur->noba_pp = $request->noba_pp;
            $Sur->tglp_dok = $request->tglp_dok;
            $Sur->dok_pp = $request->dok_pp;
            $Sur->noba_stp = $request->noba_stp;
            $Sur->tgls_dok = $request->tgls_dok;
            $Sur->dok_stp = $request->dok_stp;
            $Sur->save();

            $Nil = new data_nilai();
            $Nil->no_idn = $request->no_idn;
            $Nil->rab = $request->rab;
            $Nil->dok_pnwrn = $request->dok_pnwrn;
            $Nil->pnwrn = $request->pnwrn;
            $Nil->hpp = $request->hpp;
            $Nil->lr = $request->lr;
            $Nil->kontrak = $request->kontrak;
            $Nil->dok_kontrak = $request->dok_kontrak;
            $Nil->tagihan = $request->tagihan;
            $Nil->terbayar = $request->terbayar;
            $Nil->save();
*/
            return redirect()->route('data-monitoring.index')
            ->with(['sucess' => 'Data Monitoring Berhasil Di Simpan']);

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
