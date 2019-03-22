<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Mamla Entity
 *
 * @property int $id
 * @property int $badis_id
 * @property string $location
 * @property string|null $body
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $updated
 * @property bool|null $status
 *
 * @property \App\Model\Entity\Badi $badi
 * @property \App\Model\Entity\Ashami[] $ashamis
 * @property \App\Model\Entity\Dhara[] $dharas
 */
class Mamla extends Entity
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
        'badis_id' => true,
        'location' => true,
        'body' => true,
        'created' => true,
        'updated' => true,
        'status' => true,
        'badi' => true,
        'ashamis' => true,
        'dharas' => true
    ];
}
