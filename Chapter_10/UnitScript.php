<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 9/20/17
 * Time: 3:57 PM
 */

class UnitScript
{
    public static function joinExisting(
        UnitException$newUnit,
        Unit $occupyingUnit
    ): CompositeUnit {

        $comp = $occupyingUnit->getComposite();

        if (!is_null($comp)) {
            $comp->addUnit($newUnit);
        } else {
            $comp = new Army();

            $comp->addUnit($occupyingUnit);
            $comp->addUnit($newUnit);
        }

        return $comp;
    }
}
