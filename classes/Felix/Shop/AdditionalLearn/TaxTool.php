<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 25.08.16
 * Time: 22:25
 */

namespace Felix\Shop\AdditionalLearn;


trait TaxTool
{
    function calculateTax($price){
        return $this->getTaxRate()/100;
    }
    abstract function getTaxRate();
}