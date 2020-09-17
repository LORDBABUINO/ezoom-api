<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_course extends CI_Migration {

  public function up()
  {
    $this->dbforge->add_field([
      'id' => [
        'type' => 'INT',
        'constraint' => 5,
        'unsigned' => true,
        'auto_increment' => true
      ],
      'title' => [
        'type' => 'VARCHAR',
        'constraint' => '100',
      ],
      'description' => [
        'type' => 'TEXT',
        'null' => true,
      ],
      'thumb' => [
        'type' => 'VARCHAR',
        'constraint' => '100',
      ],
      'galerie' => [
        'type' => 'TEXT',
        'null' => true,
      ],
    ]);
    $this->dbforge->add_key('id', true);
    $this->dbforge->create_table('course');
  }

  public function down()
  {
    $this->dbforge->drop_table('course');
  }
}
