<?php

namespace spec\App\Console;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BoilerplateInputParserSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('App\Console\BoilerplateInputParser');
    }

    function it_returns_an_instance_of_command_input()
    {
        $this->parse('Foo/Bar/MyCommand', 'Foo\Bar', 'username , email')->shouldBeAnInstanceOf('App\Console\BoilerplateInput');
    }

    function it_parses_the_name_of_the_class()
    {
        $input = $this->parse('Foo/Bar/MyCommand', 'Foo\Bar', 'username , email');

        $input->class->shouldBe('MyCommand');
        $input->name->shouldBe('mycommand');
    }

    function it_parses_the_namespace_of_the_class()
    {
        $input = $this->parse('Foo/Bar/MyCommand','Foo\Bar', 'username , email');

        $input->namespace->shouldBe('Foo\Bar\MyCommand');
    }

    function it_parses_the_propreties_for_the_classe()
    {
        $input = $this->parse('Foo/Bar/MyCommand','Foo\Bar', 'username , email');

        $input->propreties->shouldBe(['username','email']);
    }

}
