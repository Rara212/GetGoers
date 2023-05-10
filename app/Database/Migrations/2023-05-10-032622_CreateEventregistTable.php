<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEventregistTable extends Migration
{
    public function up()
    {
        $fields = [
            "id" => [
                "type"=> "INT",
                "unsigned"=> true,
                "auto_increment"=> true,
            ],
            "event" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "email_user" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "firstname" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "lastname" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "gender" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "country_code" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "telephone" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "tickets_issued" => [
                "type"=> "INT",
            ]
        ];
        $this->forge->addKey('id', true);
        $this->forge->addField($fields);
        $this->forge->createTable('eventregists', true); //If NOT EXISTS create table eventregist
    }

    public function down()
    {
        $this->forge->dropTable('eventregists', true); //If Exists drop table eventregist
    }
}
