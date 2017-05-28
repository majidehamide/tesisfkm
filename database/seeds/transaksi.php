<?php

use Illuminate\Database\Seeder;

class transaksi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('transaksi')->insert([
            'nama_obat' => 'Vitamin E',
	        'farmasi' => 'Abu Nawas',
	        'user' => 'Cinta Bunda',
	        'status' => 'Belum',
	        'rat_kondisi' => 5,
	        'rat_waktu'=> 5,
	        'rat_kontrak' => 5,
	        'rat_pelayanan' => 5,
	        'komentar' => 'kualitas produk sangat bagus', 
	        'created_at' => date("Y-m-d H:i:s")

	        
        ]);
    }
}
