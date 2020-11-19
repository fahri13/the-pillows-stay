<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SewaKendaraan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'kendaraan_id' 	=> [
					'type'           => 'INT',
					'constraint'     => 11,
					'unsigned'       => TRUE,
					'auto_increment' => TRUE
			],
			'kendaraan_nama'       	=> [
					'type'           => 'VARCHAR',
					'constraint'     => '100'
			],
			'jumlah_kendaraan' 		=> [
					'type'          => 'VARCHAR',
					'constraint'	=> '100'
			],
			'waktu_sewa' 	=> [
					'type'		=>	'VARCHAR',
					'constraint'	=>	'100',
			],
		]);
		$this->forge->addKey('kendaraan_id', TRUE);
		$this->forge->createTable('sewa_kenndaraan');
	} 
	   public function down()
			{
					$this->forge->dropTable('sewa_kendaraan');
			}
	
}
