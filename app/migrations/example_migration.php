<?php

/*
    Asatru PHP - Example migration
*/

class Example_migration_Migration {
    private $database = null;
    private $connection = null;

    public function __construct($pdo)
    {
        $this->connection = $pdo;
    }

    public function up()
    {
        $this->database = new Asatru\Database\Migration('example_migration', $this->connection);
        $this->database->drop();
        $this->database->add('id INT NOT NULL AUTO_INCREMENT PRIMARY KEY');
        $this->database->add('text VARCHAR(260) NULL DEFAULT \'Test\'');
        $this->database->add('created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP');
        $this->database->create();
    }

    public function down()
    {
        $this->database = new Asatru\Database\Migration('example_migration', $this->connection);
        $this->database->drop();
    }
}