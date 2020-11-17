<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PemesananKamar extends Migration
{

        public function up()
{
    $this->forge->addField([
        'pemesanan_id' 	=> [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
        ],
        'nama'       	=> [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
        ],
        'check_in' 		=> [
                'type'          => 'VARCHAR',
                'constraint'	=> '100',
		],
		'check_out' 	=> [
				'type'		=>	'VARCHAR',
				'constraint'	=>	'100'
		],
		'tipe_kamar' 	=> [
				'type' 		=> 'VARCHAR',
				'constraint'	=> '100'
		]
    ]);
    $this->forge->addKey('pemesanan_id', TRUE);
    $this->forge->createTable('pemesanan_kamar');
} 
   public function down()
        {
                $this->forge->dropTable('pemesanan_kamar');
        }
}
