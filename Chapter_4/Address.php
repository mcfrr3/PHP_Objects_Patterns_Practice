<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 9/18/17
 * Time: 9:16 AM
 */

class Address
{
    private $number;
    private $street;

    public function __construct(string $maybenumber, string $maybestreet = null)
    {
        if (is_null($maybestreet)) {
            $this->streetaddress = $maybenumber;
        } else {
            $this->number = $maybenumber;
            $this->street = $maybestreet;
        }
    }

    public function __set(string $property, string $value)
    {
        if ($property === "streetaddress") {
            if (preg_match("/^(\d+.*?)[\s,]+(.+)$/", $value, $matches)) {
                $this->number = $matches[1];
                $this->street = $matches[2];
            } else {
                throw new \Exception("unable to parse street address: '{$value}'");
            }
        }
    }

    public function __get(string $property)
    {
        if ($property === "streetaddress") {
            return $this->number . " " . $this->street;
        }
    }
}
