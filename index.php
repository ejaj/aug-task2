<?php
/**
 * Created by PhpStorm.
 * User: kazi
 * Date: 3/8/21
 * Time: 10:03 PM
 */

namespace index;

use classes\aug\Task;

require_once 'include/autoload.php';


$taskObj = new Task();

$has_item = $taskObj->hasItem(['company' => 'augmedix', 'id' => 2], 'id');
echo '<pre>';
var_dump($has_item);
echo '</pre>';

$has_item = $taskObj->hasItem(['company' => 'augmedix', 'id' => 2], 'company');
echo '<pre>';
var_dump($has_item);
echo '</pre>';

$has_item = $taskObj->hasItem(['company' => 'augmedix', 'id' => 2], 'else');
echo '<pre>';
var_dump($has_item);
echo '</pre>';

$only = $taskObj->only(['company' => 'augmedix', 'id' => 2], 'id');
echo '<pre>';
echo print_r($only);
echo '</pre>';
$only = $taskObj->only(['company' => 'augmedix', 'id' => 2], 'company');
echo '<pre>';
echo print_r($only);
echo '</pre>';
$only = $taskObj->only(['company' => 'augmedix', 'id' => 2], ['company', 'id']);
echo '<pre>';
echo print_r($only);
echo '</pre>';