<?php


class ProductsDataset
{

    /**
     * @var Product[]
     */
    protected $products;

    /**
     * @param Product $product
     * @return $this
     */
    public function addProduct(Product $product): ProductsDataset
    {
        if (!array_key_exists($product->getSku(), $this->products)) {
            $this->products[$product->getSku()] = $product;
        }

        return $this;
    }

    /**
     * @param int $sku
     * @param int $stock
     * @return Product|null
     */
    public function setProductStockValue(int $sku, int $stock): ?Product
    {
        $product = null;
        if (array_key_exists($sku, $this->products)) {
            $product = $this->products[$sku];
            $product->setStockValue($stock);
        }

        return $product;
    }
}