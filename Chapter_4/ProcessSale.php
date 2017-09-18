<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 9/18/17
 * Time: 11:02 AM
 */

class ProcessSale
{
    private $callbacks;

    public function registerCallback(callable $callback)
    {
        if (!is_callable($callback)) {
            throw new Exception("callback not callable");
        }

        $this->callbacks[] = $callback;
    }

    public function sale(Product $product)
    {
        print "{$product->name}: processing \n";

        foreach ($this->callbacks as $callback) {
            call_user_func($callback, $product);
        }
    }
}
