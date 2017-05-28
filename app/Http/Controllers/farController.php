<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaksi;
use Illuminate\Support\Facades\DB;
class farController extends Controller
{
    public function index(){

    	$halaman = 'transaksi';
    	$transaksi_list = transaksi::all();
    	return view('user', compact('halaman', 'transaksi_list'));
    }

    public function riview($id){

    	$halaman = 'transaksi';
    	$transaksi_list = transaksi::findOrFail($id);

    	return view('riview', compact('halaman', 'transaksi_list'));
    }

     public function addRiview(Request $request, $id){

    	$halaman = 'transaksi';
    	$transaksi_list = transaksi::findOrFail($id);
    	$transaksi_list->status = 'Sudah';
    	$transaksi_list->rat_kondisi = $request->rat_kondisi;
    	$transaksi_list->rat_waktu = $request->rat_waktu;
    	$transaksi_list->rat_kontrak = $request->rat_kontrak;
    	$transaksi_list->rat_pelayanan = $request->rat_pelayanan;
    	$transaksi_list->komentar = $request->komentar;
    	$transaksi_list->save();
    	return 'berhasil riview';

    	return view('riview', compact('halaman', 'transaksi_list'));
    }

    public function farmasi(){

    	$halaman = 'transaksi';
    	$transaksi_list = transaksi::all()->groupBy('nama_obat');
        $transaksi = $user_info = DB::table('transaksi')
                 ->select('nama_obat', 'farmasi' ,DB::raw('sum(rat_kondisi)/count(*) as kondisi'), DB::raw('sum(rat_waktu)/count(*) as waktu'), DB::raw('sum(rat_kontrak)/count(*) as kontrak'), DB::raw('sum(rat_pelayanan)/count(*) as pelayanan'))
                 ->groupBy('nama_obat', 'farmasi')
                 ->get();;
        // foreach ($transaksi_list as $key => $trans) {
        //     if ($trans->count() > 1) {
        //     } else {
        //         array_push($transaksi, $trans);
        //     }
        // }
        return $transaksi;
    	return view('farmasi', compact('halaman', 'transaksi_list'));
    }


}
