<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 9/19/17
 * Time: 2:21 PM
 */

class ClassInfo
{
    public static function getData(\ReflectionClass $class)
    {
        $details = "";
        $name = $class->getName();

        if ($class->isUserDefined()) {
            $details .= "$name is user define\n";
        }

        if ($class->isInternal()) {
            $details .= "$name is built-in\n";
        }

        if ($class->isInterface()) {
            $details .= "$name is interface\n";
        }

        if ($class->isAbstract()) {
            $details .= "$name is an abstract class";
        }

        if ($class->isFinal()) {
            $details .= "$name is a final class\n";
        }

        if ($class->isInstantiable()) {
            $details .= "$name can be instantiated\n";
        } else {
            $details .= "$name can not be instantiated\n";
        }

        if ($class->isCloneable()) {
            $details .= "$name can be cloned\n";
        } else {
            $details .= "$name can not be cloned\n";
        }

        return $details;
    }
}
