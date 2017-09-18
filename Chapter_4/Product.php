<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 9/18/17
 * Time: 11:02 AM
 */

class Product
{
    public $name;
    public $price;

    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}
