<?php 
session_start();
// vd($_SESSION);

$db = require __DIR__ .'/../db/Start.php';

require __DIR__ .'/../classes/bar/Order.php';
require __DIR__ .'/../classes/foo/Order.php';

use classes\foo\Order as FooOrder;
use classes\bar\Order as BarOrder;


$myFooOrder = new FooOrder();
$myBarOrder = new BarOrder();

var_dump($myFooOrder);
var_dump($myBarOrder);

die;

$posts = $db -> getAll('posts');

require __DIR__ .'/../view/index.view.php';