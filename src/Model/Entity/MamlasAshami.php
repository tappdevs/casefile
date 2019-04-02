<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MamlasAshami Entity
 *
 * @property int $mamla_id
 * @property int $ashami_id
 *
 * @property \App\Model\Entity\Mamla $mamla
 * @property \App\Model\Entity\Ashami $ashami
 */
class MamlasAshami extends Entity
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
        'mamla' => true,
        'ashami' => true
    ];
}
