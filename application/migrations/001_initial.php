<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Initial extends CI_Migration {

	public function up()
	{
		/* users table */
		$fields = array(
			'record_id' => array(
				'type' => 'INT',
				'auto_increment' => TRUE
			),
			'insert_at' => array(
				'type' => 'TEXT',
				'null' => TRUE
			),
			'update_at' => array(
				'type' => 'TEXT',
				'null' => TRUE
			),
			'deleted_at' => array(
				'type' => 'TEXT',
				'null' => TRUE
			),
			'email' => array(
				'type' => 'TEXT',
				'null' => TRUE,
			),
			'password' => array(
				'type' => 'TEXT',
				'null' => TRUE
			),
			'firstname' => array(
				'type' => 'TEXT',
				'null' => TRUE
			),
			'lastname' => array(
				'type' => 'TEXT',
				'null' => TRUE
			)
		);
		$this->dbforge->add_field($fields);
		$this->dbforge->add_key('user_id', TRUE);
		$this->dbforge->create_table('users', TRUE);

		// add default user so we can have a null database usable application
		$this->db->insert('users', array('email'=>'default@user.com', 'password'=>'default'));

		/* troupes table */
		$fields = array(
			'record_id' => array(
				'type' => 'INT',
				'auto_increment' => TRUE
			),
			'insert_at' => array(
				'type' => 'TEXT',
				'null' => TRUE
			),
			'update_at' => array(
				'type' => 'TEXT',
				'null' => TRUE
			),
			'deleted_at' => array(
				'type' => 'TEXT',
				'null' => TRUE
			),
			'name' => array(
				'type' => 'TEXT',
				'null' => TRUE,
			)
		);
		$this->dbforge->add_field($fields);
		$this->dbforge->add_key('record_id', TRUE);
		$this->dbforge->create_table('troupes', TRUE);

		/* theaters table */
		$fields = array(
			'record_id' => array(
				'type' => 'INT',
				'auto_increment' => TRUE
			),
			'insert_at' => array(
				'type' => 'TEXT',
				'null' => TRUE
			),
			'update_at' => array(
				'type' => 'TEXT',
				'null' => TRUE
			),
			'deleted_at' => array(
				'type' => 'TEXT',
				'null' => TRUE
			),
			'name' => array(
				'type' => 'TEXT',
				'null' => TRUE,
			)
		);
		$this->dbforge->add_field($fields);
		$this->dbforge->add_key('record_id', TRUE);
		$this->dbforge->create_table('theaters', TRUE);

		/* tickets table */
		$fields = array(
			'record_id' => array(
				'type' => 'INT',
				'auto_increment' => TRUE
			),
			'insert_at' => array(
				'type' => 'TEXT',
				'null' => TRUE
			),
			'update_at' => array(
				'type' => 'TEXT',
				'null' => TRUE
			),
			'deleted_at' => array(
				'type' => 'TEXT',
				'null' => TRUE
			),
			'name' => array(
				'type' => 'TEXT',
				'null' => TRUE,
			)
		);
		$this->dbforge->add_field($fields);
		$this->dbforge->add_key('record_id', TRUE);
		$this->dbforge->create_table('tickets', TRUE);

		/* performances table */
		$fields = array(
			'record_id' => array(
				'type' => 'INT',
				'auto_increment' => TRUE
			),
			'insert_at' => array(
				'type' => 'TEXT',
				'null' => TRUE
			),
			'update_at' => array(
				'type' => 'TEXT',
				'null' => TRUE
			),
			'deleted_at' => array(
				'type' => 'TEXT',
				'null' => TRUE
			),
			'theater_record_id' => array(
				'type' => 'INT',
				'null' => TRUE,
			),
			'troupe_record_id' => array(
				'type' => 'INT',
				'null' => TRUE,
			),
			'datetime' => array(
				'type' => 'TEXT',
				'null' => TRUE,
			)
		);
		$this->dbforge->add_field($fields);
		$this->dbforge->add_key('record_id', TRUE);
		$this->dbforge->create_table('performances', TRUE);
	}

	public function down()
	{
	}

}
