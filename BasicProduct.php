<?php


class BasicProduct implements BasicProductInterface
{
    protected $productName;

    /**
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param string $productName
     * @return $this
     */
    public function setProductName(string $productName): BasicProduct
    {
        $this->productName = $productName;
        return $this;
    }
}