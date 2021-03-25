<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Participant Entity
 *
 * @property int $id
 * @property string|null $name
 * @property bool|null $age
 * @property \Cake\I18n\FrozenDate|null $dob
 * @property string|null $profession
 * @property string|null $locality
 * @property bool|null $number_of_guests
 * @property string|null $address
 */
class Participant extends Entity
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
        'age' => true,
        'dob' => true,
        'profession' => true,
        'locality' => true,
        'number_of_guests' => true,
        'address' => true,
    ];
}
