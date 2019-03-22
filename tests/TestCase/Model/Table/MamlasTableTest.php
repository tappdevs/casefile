<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MamlasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MamlasTable Test Case
 */
class MamlasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MamlasTable
     */
    public $Mamlas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Mamlas',
        'app.Badis',
        'app.Ashamis',
        'app.Dharas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Mamlas') ? [] : ['className' => MamlasTable::class];
        $this->Mamlas = TableRegistry::getTableLocator()->get('Mamlas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Mamlas);

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
