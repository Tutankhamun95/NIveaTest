<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contestant Entity
 *
 * @property int $id
 * @property string $name
 * @property string $gender
 * @property \Cake\I18n\FrozenTime|null $birthday
 * @property \Cake\I18n\FrozenTime|null $school
 * @property string|null $image
 */
class Contestant extends Entity
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
        'gender' => true,
        'birthday' => true,
        'school' => true,
        'image' => true
    ];
}
