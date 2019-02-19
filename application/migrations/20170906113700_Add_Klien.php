<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Klien extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        /*Ket Pribadi*/
                        'noinduk' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '15',
                                'null' => TRUE
                        ),
                        'nama_lengkap' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '60',
                                'null' => TRUE
                        ),
                        'nama_panggilan' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '10',
                                'null' => TRUE
                        ),
                        'ttl' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                'null' => TRUE
                        ),
                        'jk' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '60',
                                'null' => TRUE
                        ),
                        'kewarganegaraan1' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '10',
                                'null' => TRUE
                        ),
                        'agama' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '10',
                                'null' => TRUE
                        ),
                        'anakkeberapa' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '2',
                                'null' => TRUE
                        ),
                        'jmlsaudarakandung' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '2',
                                'null' => TRUE
                        ),
                        'jmlsaudaratiri' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '2',
                                'null' => TRUE
                        ),
                        'jmlsaudaraangkat' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '2',
                                'null' => TRUE
                        ),
                        'bahasaseharihari' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                                'null' => TRUE
                        ),
                        'keterangan' => array(
                                'type' => 'TEXT',
                                'null' => TRUE
                        ),
                        /*Ket Tempat Tinggal*/
                        'alamat' => array(
                                'type' => 'TEXT',
                                'null' => TRUE
                        ),
                        'nohptelp' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '26',
                                'null' => TRUE
                        ),
                        'jrkrmhkepla' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '10',
                                'null' => TRUE
                        ),
                        'transportasiygdigunakan' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'null' => TRUE
                        ),
                        /*Ket Kesehatan*/
                        'diagnosa1' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '60',
                                'null' => TRUE
                        ),
                        'goldar1' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '2',
                                'null' => TRUE
                        ),
                        'penyakitpernahdiderita1' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '30',
                                'null' => TRUE
                        ),
                        'ttb1' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '24',
                                'null' => TRUE
                        ),
                        /*ket Pendidikan & Terapi*/
                        'alamatsekolah' => array(
                                'type' => 'TEXT',
                                'null' => TRUE
                        ),
                        'alamtterapisblm' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '70',
                                'null' => TRUE
                        ),
                        'alamtterapisesdh' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '70',
                                'null' => TRUE
                        ),
                        /*Ket Ortu Kandung*/
                        /*Ayah*/
                        'namaayah' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '30',
                                'null' => TRUE
                        ),
                        'ttlayah' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '30',
                                'null' => TRUE
                        ),
                        'agamaayah' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '10',
                                'null' => TRUE
                        ),
                        'kewarganegaraan2' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '10',
                                'null' => TRUE
                        ),
                        'alamatayah' => array(
                                'type' => 'TEXT',
                                'null' => TRUE
                        ),
                        'nohpayah' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '26',
                                'null' => TRUE
                        ),
                        'pendayah' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'null' => TRUE
                        ),
                        'pekerjaanayah' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '15',
                                'null' => TRUE
                        ),
                        'ayahhidupmeninggal' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '10',
                                'null' => TRUE
                        ),
                        /*Ibu*/
                        'namaibu' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '30',
                                'null' => TRUE
                        ),
                        'ttlibu' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '30',
                                'null' => TRUE
                        ),
                        'agamaibu' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '10',
                                'null' => TRUE
                        ),
                        'kewarganegaraan3' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '10',
                                'null' => TRUE
                        ),
                        'alamatibu' => array(
                                'type' => 'TEXT',
                                'null' => TRUE
                        ),
                        'nohpibu' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '26',
                                'null' => TRUE
                        ),
                        'pendibu' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'null' => TRUE
                        ),
                        'pekerjaanibu' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '15',
                                'null' => TRUE
                        ),
                        'ibuhidupmeninggal' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '10',
                                'null' => TRUE
                        ),
                        /*Wali*/
                        'namawali' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '30',
                                'null' => TRUE
                        ),
                        'ttlwali' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '30',
                                'null' => TRUE
                        ),
                        'agamawali' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '10',
                                'null' => TRUE
                        ),
                        'kewarganegaraan4' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '10',
                                'null' => TRUE
                        ),
                        'alamatwali' => array(
                                'type' => 'TEXT',
                                'null' => TRUE
                        ),
                        'nohpwali' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '26',
                                'null' => TRUE
                        ),
                        'pendwali' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'null' => TRUE
                        ),
                        'pekerjaanwali' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '15',
                                'null' => TRUE
                        ),
                        'walihidupmeninggal' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '10',
                                'null' => TRUE
                        ),
                        /*Ket Perkembangan anak*/
                        'diagnosa2' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '60',
                                'null' => TRUE
                        ),
                        'goldar2' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '30',
                                'null' => TRUE
                        ),
                         'penyakitpernahdiderita2' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '30',
                                'null' => TRUE
                        ),
                        'ttb2' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '24',
                                'null' => TRUE
                        ),
                        /*Ket Program*/
                        'doktertumbang1' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'null' => TRUE
                        ),
                        'doktertumbang2' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'null' => TRUE
                        ),
                        'doktertumbang3' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'null' => TRUE
                        ),
                        'doktertumbang4' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'null' => TRUE
                        ),
                        'doktertumbang5' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'null' => TRUE
                        ),
                        'psikolog1' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'null' => TRUE
                        ),
                        'psikolog2' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'null' => TRUE
                        ),
                        'psikolog3' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'null' => TRUE
                        ),
                        'psikolog4' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'null' => TRUE
                        ),
                        'psikolog5' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'null' => TRUE
                        ),
                        'assesmen1' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'null' => TRUE
                        ),
                        'assesmen2' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'null' => TRUE
                        ),
                        'program3blnpertama1' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'null' => TRUE
                        ),
                        'program3blnpertama2' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'null' => TRUE
                        ),
                        'program3blnkedua1' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'null' => TRUE
                        ),
                        'program3blnkedua2' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'null' => TRUE
                        ),
                        'transisi1' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'null' => TRUE
                        ),
                        'transisi2' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'null' => TRUE
                        ),
                        'penerimaanlapdanrekotgl' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'null' => TRUE
                        ),
                        'penerimaanlapdanrekoket' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'null' => TRUE
                        ),
                        'created_at' => array(
                                'type' => 'DATETIME',
                                'null' => TRUE
                        ),
                        'updated_at' => array(
                                'type' => 'DATETIME',
                                'null' => TRUE
                        ),
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('klien');
        }

        public function down()
        {
                $this->dbforge->drop_table('klien');
        }
}