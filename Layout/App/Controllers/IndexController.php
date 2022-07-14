<?php
namespace App\Controllers;

use App\Models\Order;
use App\Models\ShippingOrder;

class IndexController
{

    public function show()
    {
        $orders = new Order();
        $orders = new ShippingOrder();
        $orders->add([
            'id' => 1,
            'name' => 'giay nam',
            'price' => '100',
            'quantity' => 2
        ]);
        $orders->add([
            'id' => 2,
            'name' => 'giay nu',
            'price' => '200',
            'quantity' => 2
        ]);
        $orders->setTax(0.08);
        $orders->setDiscount(0.3);
        $orders->setFeeShip(30);

        var_dump($orders->getTotal());
        var_dump($orders->getTax());
        var_dump($orders->getDiscount());
    }
}