<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MamlasAshamisTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MamlasAshamisTable Test Case
 */
class MamlasAshamisTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MamlasAshamisTable
     */
    public $MamlasAshamis;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MamlasAshamis',
        'app.Mamlas',
        'app.Ashamis'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MamlasAshamis') ? [] : ['className' => MamlasAshamisTable::class];
        $this->MamlasAshamis = TableRegistry::getTableLocator()->get('MamlasAshamis', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MamlasAshamis);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
