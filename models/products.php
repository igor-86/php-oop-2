<?php
require __DIR__ . "/category.php";
class Products
{
    public $name;
    public $price;
    public $category;
    public $weight;
    public $img;
    public $info;

    public function __construct($name, $price, Category $category, $weight, $img, $info)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->weight = $weight;
        $this->img = $img;
        $this->info = $info;
    }

    public function isWeight()
    {
        if ($this->weight === "") {
            throw new Exception("Non presente");
        } else {
            return $this->weight;
        }
    }
}

/* Traits */

trait LightFood
{
    public function isLight()
    {
        echo "Prodotto molto leggero";
    }
}

class Light extends Products
{
    use LightFood;
    public $light;

    public function __construct($name, $price, Category $category, $weight, $img, $info, $light)
    {
        parent::__construct($name, $price, $category, $weight, $img, $info);
        $this->light = $light;
    }
}
