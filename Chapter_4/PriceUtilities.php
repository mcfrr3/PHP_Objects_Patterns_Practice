<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 9/14/17
 * Time: 2:58 PM
 */

trait PriceUtilities
{
    private $taxrate = 17;

    public function calculateTax(float $price): float
    {
        return(($this->taxrate / 100) * $price);
    }
}
