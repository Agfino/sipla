<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Sarpras extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'nama_ruang' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '60',
                                'null' => TRUE
                        ),
                        'luas' => array(
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
                $this->dbforge->create_table('sarpras');
        }

        public function down()
        {
                $this->dbforge->drop_table('sarpras');
        }
}