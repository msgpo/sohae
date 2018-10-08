<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DormsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DormsTable Test Case
 */
class DormsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DormsTable
     */
    public $Dorms;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dorms'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Dorms') ? [] : ['className' => DormsTable::class];
        $this->Dorms = TableRegistry::getTableLocator()->get('Dorms', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Dorms);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
