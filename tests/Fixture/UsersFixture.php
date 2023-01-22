<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'user_id' => 1,
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'cryobuilt_gmail' => 'Lorem ipsum dolor sit amet',
                'freshdesk_api' => 'Lorem ipsum dolor sit amet',
                'phone_oncall' => 'Lorem ipsum dolor sit amet',
                'phone_personal' => 'Lorem ipsum dolor sit amet',
                'first_name' => 'Lorem ipsum dolor sit amet',
                'last_name' => 'Lorem ipsum dolor sit amet',
                'remember_me' => 1,
                'role' => 'Lorem ipsum dolor ',
                'created' => '2023-01-22 06:22:11',
                'modified' => '2023-01-22 06:22:11',
            ],
        ];
        parent::init();
    }
}
