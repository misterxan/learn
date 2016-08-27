<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 25.08.16
 * Time: 21:46
 */

namespace Felix\Shop;


interface Chargeable
{
    public function getPrice();
}