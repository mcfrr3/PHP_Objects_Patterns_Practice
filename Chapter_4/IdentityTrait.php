<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 9/14/17
 * Time: 3:01 PM
 */

trait IdentityTrait
{
    public function generateId(): string
    {
        return uniqid();
    }
}
