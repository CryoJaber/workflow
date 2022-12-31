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
                'id' => 1,
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'cryobuilt_gmail' => 'Lorem ipsum dolor sit amet',
                'freshdesk_api' => 'Lorem ipsum dolor sit amet',
                'phone_oncall' => 'Lorem ipsum dolor sit amet',
                'phone_personal' => 'Lorem ipsum dolor sit amet',
                'first_name' => 'Lorem ipsum dolor sit amet',
                'last_name' => 'Lorem ipsum dolor sit amet',
                'role' => 'Lorem ipsum dolor ',
                'created' => '2022-12-31 03:47:04',
                'modified' => '2022-12-31 03:47:04',
            ],
        ];
        parent::init();
    }
}
