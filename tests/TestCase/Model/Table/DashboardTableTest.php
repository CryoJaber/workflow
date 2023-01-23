<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DashboardTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DashboardTable Test Case
 */
class DashboardTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DashboardTable
     */
    protected $Dashboard;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Dashboard',
        'app.Pages',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Dashboard') ? [] : ['className' => DashboardTable::class];
        $this->Dashboard = $this->getTableLocator()->get('Dashboard', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Dashboard);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DashboardTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\DashboardTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
