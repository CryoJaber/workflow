<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DashboardFixture
 */
class DashboardFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'dashboard';
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
                'page_id' => 1,
                'page_name' => 'Lorem ipsum dolor sit amet',
                'content' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
