<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Badi Entity
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $identity_no
 * @property string|null $address
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $updated
 * @property bool|null $status
 */
class Badi extends Entity
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
        'identity_no' => true,
        'address' => true,
        'created' => true,
        'updated' => true,
        'status' => true
    ];
}
