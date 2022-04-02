<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Car Entity
 *
 * @property int $id
 * @property string $name
 * @property \Cake\I18n\FrozenDate $year
 * @property \Cake\I18n\FrozenTime $modified
 * @property int|null $brand_id
 *
 * @property \App\Model\Entity\Brand $brand
 */
class Car extends Entity
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
        'year' => true,
        'brand_id' => true,
        'brand' => true,
    ];
}
