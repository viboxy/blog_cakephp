<?php
namespace App\Test\TestCase\Controller;

use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ArticlesController Test Case
 */


class ArticlesControllerTest extends IntegrationTestCase
{
    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.articles',
        'app.categories'
    ];

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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->get('/articles');
        $this->assertResponseOk();
    }
    
    public function testIndexShort(){
        $this->get('/articles?page=1');
        $this->assertResponseOk();
        $this->assertResponseContains('Articles');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
