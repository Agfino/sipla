<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Isisarpras extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'nama_barang' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '60',
                                'null' => TRUE
                        ),
                        'jml' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'null' => TRUE
                        ),
                        'satuan' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '60',
                                'null' => TRUE
                        ),
                        'kondisi' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '60',
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
                $this->dbforge->create_table('isisarpras');
        }

        public function down()
        {
                $this->dbforge->drop_table('isisarpras');
        }
}