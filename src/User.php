<?php

namespace ZonuProject;

class User
{
    /** @var string */
    private $name;

    /** @var Item */
    private $item;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setItem(Item $item)
    {
        $this->item = $item;
    }

    /**
     * @return string
     */
    public function saySelfIntroduce()
    {
        $msg = "こんにちは、私は{$this->name}です。";

        if ($this->item) {
            $msg .= "持ち物は{$this->item->name}です。";
        }

        throw new \Exception("ひゃっはーーーーーーーーー");

        return $msg;
    }
}
