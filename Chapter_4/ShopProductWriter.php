<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 9/14/17
 * Time: 2:32 PM
 */

abstract class ShopProductWriter
{
    protected $products = [];

    public function addProduct(ShopProduct $shopProduct)
    {
        $this->products[] = $shopProduct;
    }

    abstract public function write();
}
