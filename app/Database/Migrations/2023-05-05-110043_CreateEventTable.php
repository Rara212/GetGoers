<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEventTable extends Migration
{
    public function up()
    {
        $fields = [
            "id" => [
                "type"=> "INT",
                "unsigned"=> true,
                "auto_increment"=> true,
            ],
            "name" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "location" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "about" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "Time" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "category" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "price" => [
                "type"=> "INT",
                "null" => true,
                "default" => null,
            ],
            "quota" => [
                "type"=> "INT",
                "null" => true,
                "default" => null,
            ],
            "photo" => [
                "type"=> "TEXT",
            ],
        ];
        $this->forge->addKey('id', true);
        $this->forge->addField($fields);
        $this->forge->createTable('events', true); //If NOT EXISTS create table events
    }

    public function down()
    {
        $this->forge->dropTable('events', true); //If Exists drop table events
    }
}
