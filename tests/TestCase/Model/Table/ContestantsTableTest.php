<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContestantsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContestantsTable Test Case
 */
class ContestantsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ContestantsTable
     */
    public $Contestants;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Contestants'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Contestants') ? [] : ['className' => ContestantsTable::class];
        $this->Contestants = TableRegistry::getTableLocator()->get('Contestants', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Contestants);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
