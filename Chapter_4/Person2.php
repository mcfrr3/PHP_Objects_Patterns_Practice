<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 9/18/17
 * Time: 9:32 AM
 */

class Person2
{
    protected $name;
    private $age;
    private $id;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function __destruct()
    {
        if (!empty($this->id)) {
            // save Person data
            print "saving person\n";
        }
    }
}
