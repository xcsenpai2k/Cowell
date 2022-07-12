<?php
namespace App\Models;

class ShippingOrder extends Order{
    protected $fee_ship = 0;

    public function getFeeShip()
    {
        return $this->fee_ship;
    }

    /**
     * @param int $fee_ship
     */
    public function setFeeShip($fee_ship)
    {
        $this->fee_ship = $fee_ship;
    }

    public function getTotal()
    {
        return parent::getTotal() + $this->getFeeShip();
    }

}