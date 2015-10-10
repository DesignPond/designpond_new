<?php

namespace spec\App\Console;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use App\Console\BoilerplateInput;
use Illuminate\Filesystem\Filesystem;
use Mustache_Engine;

class BoilerplateGeneratorSpec extends ObjectBehavior
{
    function let(Filesystem $file, Mustache_Engine $mustache)
    {
        $this->beConstructedWith($file,$mustache);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('App\Console\BoilerplateGenerator');
    }

    function it_generates_a_file(Filesystem $file,Mustache_Engine $mustache)
    {
        $input = new BoilerplateInput('Foo','Bar/Foo','Bar\Foo',['name','email']);

        $template    = 'foo.stub';
        $destination = 'Bar/Foo/SomeBoilerplate.php';

        $file->get($template)->shouldBeCalled()->willReturn('template');

        $mustache->render('template',$input)->shouldBeCalled()->willReturn('stub');

        $file->put($destination,'stub')->shouldBeCalled();

        $this->make($input,$template,$destination);
    }
}
