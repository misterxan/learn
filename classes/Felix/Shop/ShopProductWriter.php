<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 25.08.16
 * Time: 21:26
 */

namespace Felix\Shop;


abstract class ShopProductWriter
{
    protected $products = [];
    public function addProduct(ShopProduct $shopProduct){
        $this->products[] = $shopProduct;
    }
    abstract public function write();

}