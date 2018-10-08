<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DormsFixture
 *
 */
class DormsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'dorm_name' => ['type' => 'string', 'length' => 50, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'dorm_type' => ['type' => 'string', 'length' => 10, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'dorm_latitude' => ['type' => 'decimal', 'length' => 10, 'default' => '0', 'null' => false, 'comment' => null, 'precision' => 6, 'unsigned' => null],
        'dorm_longitude' => ['type' => 'decimal', 'length' => 10, 'default' => '0', 'null' => false, 'comment' => null, 'precision' => 6, 'unsigned' => null],
        'active' => ['type' => 'boolean', 'length' => null, 'default' => 1, 'null' => false, 'comment' => null, 'precision' => null],
        'created' => ['type' => 'timestamp', 'length' => null, 'default' => 'CURRENT_TIMESTAMP', 'null' => false, 'comment' => null, 'precision' => null],
        'modified' => ['type' => 'timestamp', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'dorm_name' => 'Lorem ipsum dolor sit amet',
                'dorm_type' => 'Lorem ip',
                'dorm_latitude' => 1.5,
                'dorm_longitude' => 1.5,
                'active' => 1,
                'created' => 1538935714,
                'modified' => 1538935714
            ],
        ];
        parent::init();
    }
}
