<?php


class Product extends BasicProduct
{
    protected $sku;
    protected $stock;

    public function __construct(int $sku, int $stock)
    {
        $this->sku = $sku;
        $this->stock = $stock;
    }

    /**
     * @return int
     */
    public function getSku(): int
    {
        return $this->sku;
    }

    /**
     * @return int
     */
    public function getStock(): int
    {
        return $this->stock;
    }

    /**
     * @param int $stock
     * @return $this
     */
    public function setStockValue(int $stock): Product
    {
        $this->stock = $stock;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductNameTitle(): string
    {
        return 'Title ' . $this->getProductName();
    }

}