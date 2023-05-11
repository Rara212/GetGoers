<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterEventsTable extends Migration
{
    public function up()
    {
        $fields = [
            'tickets_sold' => [
                'type' => 'INT'
            ]
        ];

        $this->forge->addColumn('events', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('events', ['tickets_sold']);
    }
}
