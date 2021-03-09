<?php
/**
 * Created by PhpStorm.
 * User: kazi
 * Date: 3/9/21
 * Time: 1:08 AM
 */

namespace UnitTestFiles\Test;

use PHPUnit\Framework\TestCase;
use classes\aug\Task;

include __DIR__ . "/../../include/autoload.php";

class TaskTest extends TestCase
{

    /**
     * Test array key exist in the array by true.
     */
    public function test_has_item_true()
    {
        $taskObj = new Task();
        $this->assertTrue($taskObj->hasItem(['company' => 'augmedix', 'id' => 2], 'id'));
        $this->assertFalse($taskObj->hasItem(['company' => 'augmedix', 'id' => 2], 'else'));
    }

    /**
     * Test  Exclude item(s) from an array.
     */
    public function test_only()
    {
        $taskObj = new Task();
        $this->assertEquals($taskObj->only(['company' => 'augmedix', 'id' => 2], 'id'), ['company' => 'augmedix']);
        $this->assertEquals($taskObj->only(['company' => 'augmedix', 'id' => 2], 'company'), ['id' => 2]);
        $this->assertEquals($taskObj->only(['company' => 'augmedix', 'id' => 2], ['company', 'id']), []);

    }

}