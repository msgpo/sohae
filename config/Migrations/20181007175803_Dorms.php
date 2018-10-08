<?php
use Phinx\Migration\AbstractMigration;

class Dorms extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('dorms');
        $table
            ->addColumn('dorm_name', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false
            ])
            ->addColumn('dorm_type', 'string', [
                'default' => null,
                'limit' => 10,
                'null' => false
            ])
            ->addColumn('dorm_latitude', 'decimal', [
                'default' => 0,
				'null' => false,
				'precision' => 10,
				'scale' => 6,
            ])
            ->addColumn('dorm_longitude', 'decimal', [
                'default' => 0,
				'null' => false,
				'precision' => 10,
				'scale' => 6,
            ])
            ->addColumn('active', 'boolean', [
                'default' => 1,
                'null' => false
            ])
            ->addColumn('created', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true
            ])
            ->create();
    }

    public function down()
    {
        $this->dropTable('dorms');
    }
}
