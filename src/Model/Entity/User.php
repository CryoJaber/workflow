<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $user_id
 * @property string|null $email
 * @property string|null $password
 * @property string|null $cryobuilt_gmail
 * @property string|null $freshdesk_api
 * @property string|null $phone_oncall
 * @property string|null $phone_personal
 * @property string|null $first_name
 * @property string|null $last_name
 * @property bool|null $remember_me
 * @property string|null $role
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'email' => true,
        'password' => true,
        'cryobuilt_gmail' => true,
        'freshdesk_api' => true,
        'phone_oncall' => true,
        'phone_personal' => true,
        'first_name' => true,
        'last_name' => true,
        'remember_me' => true,
        'role' => true,
        'created' => true,
        'modified' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'password',
    ];

    protected function _setPassword(string $password) : ?string
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
    }
}
