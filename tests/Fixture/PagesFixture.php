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
                'page_name' => '4e7de667-ff03-4683-9236-100214897df2',
                'controller_name' => 'Lorem ip',
                'roles' => 'Lorem ipsu',
            ],
        ];
        parent::init();
    }
}
