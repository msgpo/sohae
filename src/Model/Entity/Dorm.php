<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Dorm Entity
 *
 * @property int $id
 * @property string $dorm_name
 * @property string $dorm_type
 * @property float $dorm_latitude
 * @property float $dorm_longitude
 * @property bool $active
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Dorm extends Entity
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
        'dorm_name' => true,
        'dorm_type' => true,
        'dorm_latitude' => true,
        'dorm_longitude' => true,
        'active' => true,
        'created' => true,
        'modified' => true
    ];
}
