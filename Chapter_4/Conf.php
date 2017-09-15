<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 9/14/17
 * Time: 3:52 PM
 */

class Conf
{
    private $file;
    private $xml;
    private $lastmatch;

    public function __construct(string $file)
    {
        $this->file = $file;
        if (!file_exists($file)) {
            throw new FileException("file '$file' does not exist");
        }

        $this->xml = simplexml:load_file($file, null, LIBXML_NOERROR);
        if (!is_object($this->xml)) {
            throw new XmlException(libxml:get_last_error());
        }

        $matches = $this->xml->xpath("/conf");
        if (!count($matches)) {
            throw new ConfException("could not find root element: conf");
        }

    }

    public function write()
    {
        if (!is_writable($this->file)) {
            throw new FileException("file '{$this->file}' is not writeable");
        }
        file_put_contents($this->file, $this->xml->asXML());
    }

    public function get(string $str)
    {
        $matches = $this->xml->xpath("/conf/item[@name=\"$str\"]");

        if (count($matches)) {
            $this->lastmatch = $matches[0];
            return (string) $matches[0];
        }

        return null;
    }

    public function set(string $key, string $value)
    {
        if (!is_null($this->get($key))) {
            $this->lastmatch[0] = $value;
            return;
        }

        $conf = $this->xml->conf;
        $this->xml->addChild('item', $value)->addAttribute('name', $key);
    }
}
