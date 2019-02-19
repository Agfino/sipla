<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_User extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '60',
                                'null' => TRUE
                        ),
                        'ttl' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                'null' => TRUE
                        ),
                        'jk'	=>array(
								'type' =>'VARCHAR',
								'constraint' => '10',
								'null' => TRUE
						),
                        'agama' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '10',
                                'null' => TRUE
                        ),
                        'alamat' => array(
                                'type' => 'TEXT',
                                'null' => TRUE
                        ),
                        'tgl_msk' => array(
                                'type' => 'DATE',
                                'null' => TRUE
                        ),
                        'jabatan' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '20',
                                'null' => TRUE
                        ),
                        'username' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '60',
                                'null' => TRUE
                        ),
                        'password' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '60',
                                'null' => TRUE
                        ),
                        'status' => array(
                                'type' => 'INT',
                                'constraint' => 1,
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
                $this->dbforge->create_table('users');
        }

        public function down()
        {
                $this->dbforge->drop_table('users');
        }
}