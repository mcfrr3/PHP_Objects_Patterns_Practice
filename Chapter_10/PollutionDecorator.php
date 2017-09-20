<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 9/20/17
 * Time: 4:17 PM
 */

class PollutionDecorator extends TileDecorator
{

    public function getWealthFactor(): int
    {
        return $this->tile->getWealthFactor() - 4;
    }
}
