<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Layer Entity
 *
 * @property string $id
 * @property string $Name
 * @property int $OrderNo
 *
 * @property \App\Model\Entity\Highlight[] $highlights
 */
class Layer extends Entity
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
        '*' => true,
        'id' => false
    ];
}
