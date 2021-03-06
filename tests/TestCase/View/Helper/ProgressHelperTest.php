<?php
namespace App\Test\TestCase\View\Helper;

use Cake\TestSuite\TestCase;
use App\View\Helper\ProgressHelper;
use Cake\View\View;

class ProgressHelperTest extends TestCase{
    public function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $view = new View();
        $this->Progress = new ProgressHelper($view);
    }
    public function testBar(){
        $result = $this->Progress->bar(90);
        $this->assertContains('width: 90%', $result);
        $this->assertContains('progress-bar', $result);
        
        $result = $this->Progress->bar(33.333333);
        $this->assertContains('width: 33%', $result);
    }
    public function testCheckOne(){
        $result = $this->Progress->checkOne(30);
        $this->assertContains('|30|', $result);
    }
}
?>