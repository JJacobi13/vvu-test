<?php namespace App\Models\ValueObjects;

use ReflectionClass;

/**
 * Created by PhpStorm.
 * User: Jetse
 * Date: 28-11-2017
 * Time: 15:24
 */

class Enum
{
    protected $value;

    public static function all()
    {
        $oClass = new ReflectionClass(get_called_class());
        return $oClass->getConstants();
    }

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function __toString()
    {
        return $this->value;
    }
}