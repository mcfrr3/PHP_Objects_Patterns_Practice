<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 9/15/17
 * Time: 3:11 PM
 */

class XmlException extends \Exception
{
    private $error;

    public function __construct(\LibXMLError $error)
    {
        $shortfile = basename($error->file);
        $msg = "[{$shortfile}, line {$error->line}, col {$error->column}] {$error->message}";
        $this->error = $error;
        parent::__construct($msg, $error->code);
    }
}
