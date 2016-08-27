<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 23.08.16
 * Time: 23:09
 */
include_once ("autoload.php");
use Felix\Shop;
use Felix\Shop\AdditionalLearn\User;
use Felix\Shop\ShopProductWriter;

/*echo (new Shop\ShopProduct("Огоо","Феликс","Игнатьев",123))->calculateTax(100);
echo (new Shop\ShopProduct("Огоо","Феликс","Игнатьев",123))->generateId();*/
print_r(User::create());
print_r(Shop\AdditionalLearn\SpreadSheet::create());