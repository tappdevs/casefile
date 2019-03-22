<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AshamisTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AshamisTable Test Case
 */
class AshamisTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AshamisTable
     */
    public $Ashamis;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Ashamis',
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
        $config = TableRegistry::getTableLocator()->exists('Ashamis') ? [] : ['className' => AshamisTable::class];
        $this->Ashamis = TableRegistry::getTableLocator()->get('Ashamis', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ashamis);

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
