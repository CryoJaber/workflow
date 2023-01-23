<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmailFixture
 */
class EmailFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'email';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'message_id' => 1,
                'message' => 'Lorem ipsum dolor sit amet',
                'file' => 'Lorem ipsum dolor sit amet',
                'mailingdate' => 'Lorem ipsum dolor sit amet',
                'starred_status' => 1,
                'sender_email' => 'Lorem ipsum dolor sit amet',
                'reciever_email' => 'Lorem ipsum dolor sit amet',
                'inbox_status' => 1,
                'sent_status' => 1,
                'draft_status' => 1,
                'trash_status' => 1,
                'email_subject' => 'Lorem ipsum dolor sit amet',
                'read_status' => 1,
                'delete_status' => 1,
            ],
        ];
        parent::init();
    }
}
