<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SewaPenjemputan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'penjemputan_id' 	=> [
					'type'           => 'INT',
					'constraint'     => 11,
					'unsigned'       => TRUE,
					'auto_increment' => TRUE
			],
			'nama_tamu'       	=> [
					'type'           => 'VARCHAR',
					'constraint'     => '100',
			],
			'jumlah_tamu' 		=> [
					'type'          => 'VARCHAR',
					'constraint'	=> '100',
			],
			'lokasi_penjemputan' 	=> [
					'type'		=>	'VARCHAR',
					'constraint'	=>	'100'
			]
		]);
		$this->forge->addKey('penjemputan_id', TRUE);
		$this->forge->createTable('sewa_penjemputan');
	} 
	   public function down()
			{
					$this->forge->dropTable('sewa_penjemputan');
			}
}
