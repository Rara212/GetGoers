<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterEventsTable extends Migration
{
    public function up()
    {
        $fields = [
            'start_time' => [
                'type' => 'VARCHAR',
                "constraint" => "200",
            ]
        ];
        $this->forge->addColumn('events', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('events', ['start_time']);
    }
}
