<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DharasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DharasTable Test Case
 */
class DharasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DharasTable
     */
    public $Dharas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Dharas',
        'app.Mamlas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Dharas') ? [] : ['className' => DharasTable::class];
        $this->Dharas = TableRegistry::getTableLocator()->get('Dharas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Dharas);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
