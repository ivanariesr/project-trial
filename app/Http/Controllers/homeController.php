<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_nilai;
use App\Models\data_monitoring;
use App\Models\data_customer;
use DB;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendapatan = data_nilai::join('data_monitorings', 'data_nilais.no_idn', '=', 'data_monitorings.no_idn')
        ->select(DB::raw("SUM(terbayar) as total, YEAR(tgl_akhir) as tahun"))
        ->groupBy(DB::raw('YEAR(tgl_akhir) ASC'))
        ->pluck('total', 'tahun');        

        $labels_pendapatan = $pendapatan->keys();
        $data_pendapatan = $pendapatan->values();

        $deadline = data_monitoring::select(DB::raw('COUNT(tgl_akhir) as data'), 
        DB::raw('MONTH(tgl_akhir) as bulan'))
        ->where('tgl_akhir', 'LIKE', '%2022%')
        ->groupBy(DB::raw('MONTH(tgl_akhir) ASC'))
        ->pluck('data','bulan');
        $labels_deadline = $deadline->keys();
        $data_deadline = $deadline->values();

        $SA1 = data_monitoring::select(DB::raw("COUNT(stts_admin) as total_stts"))
        ->where('stts_admin', '=', 'Belum Ada Permintaan')->pluck('total_stts');
        $savalue1 = $SA1->values();
        $SA2 = data_monitoring::select(DB::raw("COUNT(stts_admin) as total_stts"))
        ->where('stts_admin', '=', 'RAB')->pluck('total_stts');
        $savalue2 = $SA2->values();
        $SA3 = data_monitoring::select(DB::raw("COUNT(stts_admin) as total_stts"))
        ->where('stts_admin', '=', 'Pricing')->pluck('total_stts');
        $savalue3 = $SA3->values();
        $SA4 = data_monitoring::select(DB::raw("COUNT(stts_admin) as total_stts"))
        ->where('stts_admin', '=', 'Penawaran')->pluck('total_stts');
        $savalue4 = $SA4->values();
        $SA5 = data_monitoring::select(DB::raw("COUNT(stts_admin) as total_stts"))
        ->where('stts_admin', '=', 'Nego')->pluck('total_stts');
        $savalue5 = $SA5->values();
        $SA6 = data_monitoring::select(DB::raw("COUNT(stts_admin) as total_stts"))
        ->where('stts_admin', '=', 'Belum Kontrak')->pluck('total_stts');
        $savalue6 = $SA6->values();
        $SA7 = data_monitoring::select(DB::raw("COUNT(stts_admin) as total_stts"))
        ->where('stts_admin', '=', 'Kesepakatan Harga')->pluck('total_stts');
        $savalue7 = $SA7->values();
        $SA8 = data_monitoring::select(DB::raw("COUNT(stts_admin) as total_stts"))
        ->where('stts_admin', '=', 'BA Kesepakatan')->pluck('total_stts');
        $savalue8 = $SA8->values();
        $SA9 = data_monitoring::select(DB::raw("COUNT(stts_admin) as total_stts"))
        ->where('stts_admin', '=', 'Kontrak')->pluck('total_stts');
        $savalue9 = $SA9->values();
        $SA10 = data_monitoring::select(DB::raw("COUNT(stts_admin) as total_stts"))
        ->where('stts_admin', '=', 'Laporan / BA')->pluck('total_stts');
        $savalue10 = $SA10->values();
        $SA11 = data_monitoring::select(DB::raw("COUNT(stts_admin) as total_stts"))
        ->where('stts_admin', '=', 'Tagihan')->pluck('total_stts');
        $savalue11 = $SA11->values();
        $SA12 = data_monitoring::select(DB::raw("COUNT(stts_admin) as total_stts"))
        ->where('stts_admin', '=', 'Terbayar')->pluck('total_stts');
        $savalue12 = $SA12->values();
        $SA13 = data_monitoring::select(DB::raw("COUNT(stts_admin) as total_stts"))
        ->where('stts_admin', '=', 'Cancel')->pluck('total_stts');
        $savalue13 = $SA13->values();

        $SP1 = data_monitoring::select(DB::raw("COUNT(stts_pkerjaan) as total_sttsp"))
        ->where('stts_pkerjaan', '=', 'Batal')->pluck('total_sttsp');
        $spvalue1 = $SP1->values();
        $SP2 = data_monitoring::select(DB::raw("COUNT(stts_pkerjaan) as total_sttsp"))
        ->where('stts_pkerjaan', '=', 'Belum Jalan')->pluck('total_sttsp');
        $spvalue2 = $SP2->values();
        $SP3 = data_monitoring::select(DB::raw("COUNT(stts_pkerjaan) as total_sttsp"))
        ->where('stts_pkerjaan', '=', 'Running')->pluck('total_sttsp');
        $spvalue3 = $SP3->values();
        $SP4 = data_monitoring::select(DB::raw("COUNT(stts_pkerjaan) as total_sttsp"))
        ->where('stts_pkerjaan', '=', 'Selesai')->pluck('total_sttsp');
        $spvalue4 = $SP4->values();
        return view('/dashboard-user',compact(
            'data_pendapatan','labels_pendapatan',
            'savalue1','savalue2','savalue3','savalue4','savalue5','savalue6','savalue7',
            'savalue8','savalue9','savalue10','savalue11','savalue12','savalue13',
            'spvalue1','spvalue2','spvalue3','spvalue4', 'labels_deadline', 'data_deadline'
        ));
    }
    
    public function show_monitoring () {
        $displaydata = data_monitoring::join('data_customers','data_monitorings.no_idc', '=', 'data_customers.no_idc')->get();
        return view('/monitoring', compact('displaydata'));
    }

    public function show_customer () {
        $displaydata = data_customer::all();
        return view('/customer', compact('displaydata'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
