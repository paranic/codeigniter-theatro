<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Initial_Scheme extends CI_Migration {

	public function up()
	{
		//$this->dbforge->create_database('theatro');
		
		/* users */
		$fields = array(
			'user_id' => array(
				'type' => 'INT',
				'constraint' => 8,
				'auto_increment' => TRUE
			),
			'email' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => TRUE,
			),
			'password' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => TRUE
			),
			'firstname' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => TRUE
			),
			'lastname' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => TRUE
			)
		);
		$this->dbforge->add_field($fields);
		$this->dbforge->add_key('user_id', TRUE);
		$this->dbforge->create_table('users', TRUE);
	}
	
	public function down()
	{
		$this->dbforge->drop_table('users');
	}
}
