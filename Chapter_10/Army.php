<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 9/20/17
 * Time: 3:31 PM
 */

class Army extends Unit
{
    private $units = [];

    public function addUnit(Unit $unit)
    {
        if (in_array($unit, $this->units, true)) {
            return;
        }

        $this->units[] = $unit;
    }

    public function removeUnit(Unit $unit)
    {
        $idx = array_search($unit, $this->units, true);

        if (is_int($idx)) {
            array_splice($this->units, $idx, 1, []);
        }
    }

    public function bombardStrength(): int
    {
        $ret = 0;

        foreach ($this->units as $unit) {
            $ret += $unit->bombardStrength();
        }

        return $ret;
    }
}
