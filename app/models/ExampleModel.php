<?php

/*
    Asatru PHP - Example model
*/

use Asatru\Database;

class ExampleModel extends \Asatru\Database\Model {
    public static function testData()
    {
        //Insert some test data
        
        ExampleModel::raw('INSERT INTO ' . self::tableName() . ' (text) VALUES("Text #1");');
        ExampleModel::raw('INSERT INTO ' . self::tableName() . ' (text) VALUES("Text #2");');
        ExampleModel::raw('INSERT INTO ' . self::tableName() . ' (text) VALUES("Text #3");');
    }

    public static function getText($id)
    {
        //Query text from database

        $result = ExampleModel::raw('SELECT text FROM ' . self::tableName() . ' WHERE id = ?', array($id));
        
        return $result->get(0)->get('text');
    }

    public static function setText($id, $text)
    {
        //Set text into table

        ExampleModel::raw('UPDATE ' . self::tableName() . ' set text = ? WHERE id = ?;', array($text, $id));
    }

    public static function tableName()
    {
        //Return the associated table name of the migration

        return 'example_migration';
    }
}
