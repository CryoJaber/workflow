<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmailTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmailTable Test Case
 */
class EmailTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EmailTable
     */
    protected $Email;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Email',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Email') ? [] : ['className' => EmailTable::class];
        $this->Email = $this->getTableLocator()->get('Email', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Email);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EmailTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
