<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Email Entity
 *
 * @property int $message_id
 * @property string $message
 * @property string|resource|null $file
 * @property string|null $mailingdate
 * @property int $starred_status
 * @property string $sender_email
 * @property string $reciever_email
 * @property int $inbox_status
 * @property int $sent_status
 * @property int $draft_status
 * @property int $trash_status
 * @property string|null $email_subject
 * @property int $read_status
 * @property int $delete_status
 */
class Email extends Entity
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
        'message' => true,
        'file' => true,
        'mailingdate' => true,
        'starred_status' => true,
        'sender_email' => true,
        'reciever_email' => true,
        'inbox_status' => true,
        'sent_status' => true,
        'draft_status' => true,
        'trash_status' => true,
        'email_subject' => true,
        'read_status' => true,
        'delete_status' => true,
    ];
}
