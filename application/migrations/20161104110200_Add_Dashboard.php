<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Dashboard extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'nama_lembaga' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '50',
                                'null' => TRUE
                        ),
                        'alamat' => array(
                                'type' => 'TEXT',
                                'null' => TRUE
                        ),
                        'kepala' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '30',
                                'null' => TRUE
                        ),
                        'nip' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '30',
                                'null' => TRUE
                        ),
                        'nosk' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '30',
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
                $this->dbforge->create_table('dashboard');
        }

        public function down()
        {
                $this->dbforge->drop_table('dashboard');
        }
}