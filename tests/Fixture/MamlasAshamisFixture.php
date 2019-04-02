<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MamlasAshamisFixture
 *
 */
class MamlasAshamisFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'mamla_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ashami_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'ashami_key' => ['type' => 'index', 'columns' => ['ashami_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['mamla_id', 'ashami_id'], 'length' => []],
            'ashami_key' => ['type' => 'foreign', 'columns' => ['ashami_id'], 'references' => ['ashamis', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'mamla_key' => ['type' => 'foreign', 'columns' => ['mamla_id'], 'references' => ['mamlas', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
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
                'mamla_id' => 1,
                'ashami_id' => 1
            ],
        ];
        parent::init();
    }
}
