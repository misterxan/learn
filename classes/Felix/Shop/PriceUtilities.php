<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 25.08.16
 * Time: 21:57
 */

namespace Felix\Shop;


trait PriceUtilities
{
    private $taxrate = 17;
    public function calculateTax($price){
        return (($this->taxrate/100)*$price);
    }
}