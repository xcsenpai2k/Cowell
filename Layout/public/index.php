<?php
require_once 'C:\laragon\www\Cowell\vendor\autoload.php';
//require '../App/Models/Order.php';
//require '../App/Models/ShippingOrder.php';
use App\Models\Order;
use App\Models\ShippingOrder;
use App\Controllers\IndexController;


$index = new IndexController();
$params = $index->show();

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

//$orders = new Order();
//$orders = new ShippingOrder();
//$orders->add([
//    'id'=>1,
//    'name'=>'giay nam',
//    'price'=>'100',
//    'quantity'=>2
//]);
//$orders->add([
//    'id'=>2,
//    'name'=>'giay nu',
//    'price'=>'200',
//    'quantity'=>2
//]);
//$orders->setTax(0.08);
//$orders->setDiscount(0.3);
//$orders->setFeeShip(30);
//
//var_dump($orders->getTotal());
//var_dump($orders->getTax());
//var_dump($orders->getDiscount());

