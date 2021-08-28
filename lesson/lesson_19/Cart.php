<?php

class Cart
{
    private $products = [];

    public function addProduct($product)
    {
        $this->products[] = $product;
    }

    public function getTotalCost()
    {
        $sum = 0;

        foreach ($this->products as $product)
        {
            $sum += $product->getQuantity();
        }
        return $sum;
    }

    public function getAvgPrice()
    {
        $sum = 0;

        foreach ($this->products as $product)
        {
            $sum += $product->getPrice();
        }
        return $sum / $this->getTotalCost();
    }

    public function getProducts()
    {
        return $this->products;
    }
}