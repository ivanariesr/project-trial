<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
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
            'stts_admin' => 'required',

            'dok_penugasan' => 'nullable|mimes:doc,docx,pdf|max:10000',
            'dok_kspktn' => 'nullable|mimes:doc,docx,pdf|max:10000',
            'dok_pp' => 'nullable|mimes:doc,docx,pdf|max:10000',   
            'dok_stp' => 'nullable|mimes:doc,docx,pdf|max:10000',
            'dok_rab' => 'nullable|mimes:doc,docx,xlx,xls,xlsx,pdf|max:10000',
            'dok_pnwrn' => 'nullable|mimes:doc,docx,pdf|max:10000',
            'dok_kontrak' => 'nullable|mimes:doc,docx,pdf|max:10000'

        ]);

         if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }
        else {

            $Mon = new data_monitoring();
            $Sur = new data_surat();
            $Nil = new data_nilai();

            if ($request->hasFile('dok_penugasan')) {
            $dok_penugasan = date('Ymd-Hi').'_'.$request->file('dok_penugasan')->getClientOriginalName();
            $dok_penugasan = str_replace(' ', '_', $dok_penugasan);
            $path_dokpenugasan = $request->file('dok_penugasan')->storeAs('public/files', $dok_penugasan);

            $Sur->dok_penugasan = $dok_penugasan;
            $Sur->path_dokpenugasan = $path_dokpenugasan;    
            }

            if ($request->hasFile('dok_kspktn')) {
            $dok_kspktn = date('Ymd-Hi').'_'.$request->file('dok_kspktn')->getClientOriginalName();
            $path_dokkspktn = $request->file('dok_kspktn')->store('public/files');

            $Sur->dok_kspktn = $dok_kspktn;
            $Sur->path_dokkspktn = $path_dokkspktn;
            }

            if ($request->hasFile('dok_pp')) {
            $dok_pp = date('Ymd-Hi').'_'.$request->file('dok_pp')->getClientOriginalName();
            $path_dokpp = $request->file('dok_pp')->store('public/files');

            $Sur->dok_pp = $dok_pp;
            $Sur->path_dokpp = $path_dokpp;
            }
            
            if ($request->hasFile('dok_stp')) {
            $dok_stp = date('Ymd-Hi').'_'.$request->file('dok_stp')->getClientOriginalName();
            $path_dokstp = $request->file('dok_stp')->store('public/files');
            
            $Sur->dok_stp = $dok_stp;
            $Sur->path_dokstp = $path_dokstp;
            }
            
            if ($request->hasFile('dok_rab')) {
            $dok_rab = date('Ymd-Hi').'_'.$request->file('dok_rab')->getClientOriginalName();
            $path_dokrab = $request->file('dok_rab')->store('public/files');
            
            $Nil->dok_rab = $dok_rab;
            $Nil->path_dokrab = $path_dokrab;
            }
            
            if ($request->hasFile('dok_pnwrn')) {
            $dok_pnwrn = date('Ymd-Hi').'_'.$request->file('dok_pnwrn')->getClientOriginalName();
            $path_dokpnwrn = $request->file('dok_pnwrn')->store('public/files');
            
            $Nil->dok_pnwrn = $dok_pnwrn;
            $Nil->path_dokpnwrn = $path_dokpnwrn;
            }

            if ($request->hasFile('dok_kontrak')) {
            $dok_kontrak = date('Ymd-Hi').'_'.$request->file('dok_kontrak')->getClientOriginalName();
            $path_dokkontrak = $request->file('dok_kontrak')->store('public/files');

            $Nil->dok_kontrak = $dok_kontrak;
            $Nil->path_dokkontrak = $path_dokkontrak;
            }
/*
            $Mon = data_monitoring::create($request->all());
            $Sur = data_surat::create($request->all());
            $Nil = data_nilai::create($request->all());
*/

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

            $Sur->no_ids = $request->no_ids;
            $Sur->no_penugasan = $request->no_penugasan;
            $Sur->tgl_penugasan = $request->tgl_penugasan;
            
            $Sur->noba_kspktn = $request->noba_kspktn;
            $Sur->tglk_dok = $request->tglk_dok;

            $Sur->noba_pp = $request->noba_pp;
            $Sur->tglp_dok = $request->tglp_dok;

            $Sur->noba_stp = $request->noba_stp;
            $Sur->tgls_dok = $request->tgls_dok;
            $Sur->save();

            $Nil->no_idn = $request->no_idn;
            $Nil->rab = $request->rab;
            
            $Nil->pnwrn = $request->pnwrn;
            $Nil->hpp = $request->hpp;
            $Nil->lr = $request->lr;
            $Nil->kontrak = $request->kontrak;

            $Nil->tagihan = $request->tagihan;
            $Nil->terbayar = $request->terbayar;
            $Nil->save();

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
