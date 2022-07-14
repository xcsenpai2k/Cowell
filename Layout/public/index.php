<?php
require '..\vendor\autoload.php';
// require '../App/Models/Order.php';
// require '../App/Models/ShippingOrder.php';
use App\Models\Order;
use App\Models\ShippingOrder;
use App\Controllers\IndexController;

// $index = new IndexController();
// $params = $index->show();

$order = new Order();
$order->add([
    'id' => 1,
    'name' => 'giay',
    'price' => '1000',
    'quantity' => 5
]);
var_dump($order->getTotal());
// Transforms MyNamespace_MySubNamespace_MyClassName
// or \MyNamespace\MySubNamespace\MyClassName
// to MyNamespace/MySubNamespace/MyClassName.php
// and searches include_path for a match to require
//spl_autoload_register(function($className) {
//    $className = ltrim($className, '\\');
//    $fileName  = '';
//    $namespace = '';
//    if ($lastNsPos = strrpos($className, '\\')) {
//        $namespace = substr($className, 0, $lastNsPos);
//        $className = substr($className, $lastNsPos + 1);
//        $fileName  = $namespace . DIRECTORY_SEPARATOR; //str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
//    }
//    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . 	'.php';
//    require '../' . $fileName;
//});
