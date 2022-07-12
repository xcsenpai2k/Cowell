<?php
namespace App\Models;
class Order{
    private $items=[];
    private $tax=0;
    private $discount=0;

    /**
     * @param array $item //id,name,price,quantity
     */
    public function add($item){
        $this->items[]=$item;
    }

    public function setTax($tax)
    {
        $this->tax = $tax;
    }

    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    public function getTax()
    {
        return $this->tax * $this->total();
    }

    public function getDiscount()
    {
        return $this->discount * $this->total();
    }

    public function getTotal(){
        return $this->total() + $this->getTax() - $this->getDiscount();
    }


    private function total(){
        $total = 0;
        foreach($this->items as $item){
            $total += $item['price'] * $item['quantity'];
        }
        return $total;
    }

}