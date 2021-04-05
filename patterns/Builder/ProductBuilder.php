<?php


namespace Patterns\Builder;


class ProductBuilder implements BuilderInterface
{
    protected $name;

    protected $price;

    protected $description;

    protected $color;

    protected $height;

    protected $width;

    protected $weight;

    protected $design;

    public function build(): ProductInterface
    {
        return new Product(
            $this->name,
            $this->price,
            $this->description,
            $this->color,
            $this->height,
            $this->width,
            $this->weight,
            $this->design
        );
    }

    /**
     * @param mixed $name
     * @return ProductBuilder
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param mixed $price
     * @return ProductBuilder
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @param mixed $description
     * @return ProductBuilder
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param mixed $color
     * @return ProductBuilder
     */
    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @param mixed $height
     * @return ProductBuilder
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @param mixed $width
     * @return ProductBuilder
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @param mixed $weight
     * @return ProductBuilder
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @param mixed $design
     * @return ProductBuilder
     */
    public function setDesign($design)
    {
        $this->design = $design;
        return $this;
    }
}