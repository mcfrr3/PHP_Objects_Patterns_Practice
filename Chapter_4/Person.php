<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 9/18/17
 * Time: 8:54 AM
 */

class Person
{
    private $myname;
    private $myage;

    public function __get(string $property)
    {
        $method = "get{$property}";
        if (method_exists($this, $method)) {
            return $this->$method();
        }
    }

    public function __set(string $property, string $value)
    {
        $method = "set{$property}";
        if (method_exists($this, $method)) {
            return $this->$method($value);
        }
    }

    public function __isset(string $property)
    {
        $method = "get{$property}";
        return (method_exists($this, $method));
    }

    public function __unset(string $property)
    {
        $method = "set{$property}";
        if (method_exists($this, $method)) {
            $this->$method(null);
        }
    }

    public function setName(string $name)
    {
        $this->myname = $name;
        if (!is_null($name)) {
            $this->myname = strtoupper($this->myname);
        }
    }

    public function getName(): string
    {
        return"Bob";
    }

    public function setAge(int $age)
    {
        $this->myage = $age;
    }

    public function getAge(): int
    {
        return 44;
    }
}
