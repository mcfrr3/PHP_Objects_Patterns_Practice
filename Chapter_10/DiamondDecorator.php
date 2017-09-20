<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 9/20/17
 * Time: 4:16 PM
 */

class DiamondDecorator extends TileDecorator
{

    public function getWealthFactor(): int
    {
        return$this->tile->getWealthFactor() + 2;
    }
}
