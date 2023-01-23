<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PagesFixture
 */
class PagesFixture extends TestFixture
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
                'page_name' => 'a4ca509e-d185-4a64-bcdb-e1062a9d552d',
                'controller_name' => 'Lorem ip',
                'roles' => 'Lorem ipsu',
            ],
        ];
        parent::init();
    }
}
