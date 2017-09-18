<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 9/18/17
 * Time: 9:08 AM
 */

class PersonWriter
{
    public function writeName(Person $p)
    {
        print $p->getName() . "\n";
    }

    public function writeAge(Person $p)
    {
        print $p->getAge() . "\n";
    }
}
