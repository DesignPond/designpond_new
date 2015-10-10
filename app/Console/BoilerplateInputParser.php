<?php

namespace App\Console;

class BoilerplateInputParser
{
    public function parse($path, $base, $propreties)
    {
        $segments  = explode('\\',str_replace('/','\\',$path));
        $name      = array_pop($segments);
        $namespace = $base.'/'.$name;
        $namespace = str_replace('/','\\',$namespace);

        $rest      = array_pop($segments);
        $base      = $base.'/'.$rest.'/'.$name;

        $propreties = $this->parsePropreties($propreties);

        return new \App\Console\BoilerplateInput($name,$base,$namespace,$propreties);
    }

    private function parsePropreties($propreties)
    {
        return preg_split('/ ?, ?/',$propreties,null, PREG_SPLIT_NO_EMPTY);
    }

}
