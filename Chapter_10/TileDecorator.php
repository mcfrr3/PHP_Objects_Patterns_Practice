<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 9/20/17
 * Time: 4:15 PM
 */

abstract class TileDecorator extends Tile
{
    protected $tile;

    public function __construct(Tile $tile)
    {
        $this->tile = $tile;
    }
}
