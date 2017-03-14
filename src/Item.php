<?php

namespace ZonuProject;

/**
 * @property-read string $name
 */
class Item
{
    /** @var string */
    private $name;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function __get($prop)
    {
        return $this->$prop;
    }
}
