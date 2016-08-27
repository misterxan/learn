<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 25.08.16
 * Time: 23:06
 */

namespace Felix\Shop\AdditionalLearn;


abstract class DomainObject
{
    private $group;
    public function __construct(){
        $this->group = static::getGroup();
    }
    public static function create(){
        return new static();
    }
    public static function getGroup(){
        return "default";
    }

}