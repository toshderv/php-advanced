<?php


namespace Patterns\Builder;


class Product implements ProductInterface
{
    protected $name;

    protected $price;

    protected $description;

    protected $color;

    protected $height;

    protected $width;

    protected $weight;

    protected $design;

    public function __construct(
        $name,
        $price,
        $description,
        $color = null,
        $height = null,
        $width = null,
        $weight = null,
        $design = null
    ) {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->color = $color;
        $this->height = $height;
        $this->width = $width;
        $this->weight = $weight;
        $this->design = $design;
    }
}