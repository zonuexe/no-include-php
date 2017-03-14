<?php

namespace ZonuProject;

class User
{
    private $name;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function saySelfIntroduce()
    {
        return "こんにちは、私は{$this->name}です。";
    }
}
