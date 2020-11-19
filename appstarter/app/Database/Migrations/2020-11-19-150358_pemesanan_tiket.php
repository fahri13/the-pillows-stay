<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PemesananTiket extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'tiket_id' 	=> [
					'type'           => 'INT',
					'constraint'     => 11,
					'unsigned'       => TRUE,
					'auto_increment' => TRUE
			],
			'nama_penumpang'       	=> [
					'type'           => 'VARCHAR',
					'constraint'     => '100',
			],
			'stasiun_awal' 		=> [
					'type'          => 'VARCHAR',
					'constraint'	=> '100',
			],
			'stasiun_tujuan' 	=> [
					'type'		=>	'VARCHAR',
					'constraint'	=>	'100'
			],
			'tanggal_berangkat' 	=> [
					'type' 		=> 'VARCHAR',
					'constraint'	=> '100'
			],
			'jumlah_penumpang' 	=> [
				'type' 		=> 'VARCHAR',
				'constraint'	=> '100'
			],
			'kelas_kereta' 	=> [
				'type' 		=> 'VARCHAR',
				'constraint'	=> '100'
			]
		]);
		$this->forge->addKey('tiket_id', TRUE);
		$this->forge->createTable('pemesanan_tiket');
	} 
	   public function down()
			{
					$this->forge->dropTable('pemesanan_tiket');
			}
}
