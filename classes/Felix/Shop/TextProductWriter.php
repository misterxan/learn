<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 25.08.16
 * Time: 21:32
 */

namespace Felix\Shop;


class TextProductWriter extends ShopProductWriter
{
    public function write()
    {
        $str = "ТОВАРЫ!\n";
        foreach ($this->products as $shopProduct){
            $str .= $shopProduct->getSummaryLine()."\n";
        }
        print $str;
    }
}