<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BadisTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BadisTable Test Case
 */
class BadisTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BadisTable
     */
    public $Badis;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Badis'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Badis') ? [] : ['className' => BadisTable::class];
        $this->Badis = TableRegistry::getTableLocator()->get('Badis', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Badis);

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
