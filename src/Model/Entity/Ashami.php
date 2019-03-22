<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ashami Entity
 *
 * @property int $id
 * @property string $name
 * @property string $father
 * @property string $mother
 * @property string $address
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $updated
 * @property bool|null $status
 *
 * @property \App\Model\Entity\Mamla[] $mamlas
 */
class Ashami extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'father' => true,
        'mother' => true,
        'address' => true,
        'created' => true,
        'updated' => true,
        'status' => true,
        'mamlas' => true
    ];
}
