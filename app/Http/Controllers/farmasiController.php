<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaksi;

class farmasi extends Controller
{
    public function index(){

    	$halaman = 'transaksi';
    	$transaksi_list = transaksi::all();
    	return view('user', compact('halaman', 'transaksi_list'));
    }
}
