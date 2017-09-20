<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 9/20/17
 * Time: 4:01 PM
 */

class TroopCarrier extends CompositeUnit
{
    public function addUnit(Unit $unit)
    {
        if ($unit instanceof Cavalry) {
            throw new UnitException("Can't get a horse on the vehicle");
        }

        parent::addUnit($unit);
    }

    public function bombardStrength(): int
    {
        return 0;
    }
}
