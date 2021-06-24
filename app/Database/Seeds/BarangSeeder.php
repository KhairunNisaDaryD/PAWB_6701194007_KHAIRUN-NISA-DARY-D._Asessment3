<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BarangSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'nama_barang'   => 'Baju',
				'harga_beli' 	=> '100000',
				'harga_jual'    => '150000',
				'stok'        	=> '20'
			],
			[
				'nama_barang'   => 'Mukena',
				'harga_beli' 	=> '20000',
				'harga_jual'    => '25000',
				'stok'        	=> '10'
			],
			[
				'nama_barang'   => 'Kemeja',
				'harga_beli' 	=> '200000',
				'harga_jual'    => '230000',
				'stok'        	=> '34'
			],
			[
				'nama_barang'   => 'Sepatu',
				'harga_beli' 	=> '80000',
				'harga_jual'    => '100000',
				'stok'        	=> '5'
			]
		];
		$this->db->table('Barang')->insertBatch($data);
	}
}
