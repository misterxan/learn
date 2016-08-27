<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 25.08.16
 * Time: 21:59
 */

namespace Felix\Shop\AdditionalLearn;


trait IdentityTrait
{
    public function generateId(){
        return uniqid();
    }
}