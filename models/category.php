<?php
class Category
{
    public $name;
    public $icons;

    public function __construct($name, $icons)
    {
        $this->name = $name;
        $this->icons = $icons;
    }
}
