<?php

namespace App\Console;

class BoilerplateInput{

    public $name;
    public $class;
    public $base;
    public $namespace;
    public $propreties;

    public function __construct($name,$base,$namespace,$propreties)
    {
        $this->class      = $name;
        $this->base       = $base;
        $this->name       = strtolower($name);
        $this->namespace  = $namespace;
        $this->propreties = $propreties;
    }

    public function arguments()
    {
        return implode(',',array_map(function($proprety)
        {
            return '$'.$proprety;
        },$this->propreties));
    }

}