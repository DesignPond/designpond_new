<?php

namespace App\Console;

use Illuminate\Filesystem\Filesystem;
use Mustache_Engine;

class BoilerplateGenerator
{
    protected $file;
    protected $mustache;

    public function __construct(Filesystem $file, Mustache_Engine $mustache)
    {
        $this->file     = $file;
        $this->mustache = $mustache;
    }

    public function make(BoilerplateInput $input, $template, $destination)
    {
        $template = $this->file->get($template);

        $stub = $this->mustache->render($template,$input);

        $this->file->put($destination,$stub);
    }

}
