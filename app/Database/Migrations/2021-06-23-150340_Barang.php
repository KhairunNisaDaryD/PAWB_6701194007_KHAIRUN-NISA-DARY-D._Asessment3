<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Barang extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_barang'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama_barang' => [
				'type'           => 'VARCHAR',
				'constraint'     => '50',
			],
			'harga_beli' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'harga_jual' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'stok' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			]
		]);
		$this->forge->addPrimaryKey('id_barang');
		$this->forge->createTable('Barang');
	}

	public function down()
	{
		$this->forge->dropTable('Barang');
	}
}
