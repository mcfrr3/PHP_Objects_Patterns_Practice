<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 9/14/17
 * Time: 2:39 PM
 */

class TextProductWriter extends ShopProductWriter
{

    public function write()
    {
        $str = "PRODUCTS:\n";

        foreach ($this->products as $shopProduct) {
            $str .= $shopProduct->getSummaryLine()."\n";
        }

        print $str;
    }
}
