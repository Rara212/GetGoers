<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterEvenregistsTable extends Migration
{
    public function up()
    {
        $fields = [
            'event_id' => [
                'type' => 'INT'
            ]
        ];

        $this->forge->addColumn('eventregists', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('eventregists', ['event_id']);
    }
}
