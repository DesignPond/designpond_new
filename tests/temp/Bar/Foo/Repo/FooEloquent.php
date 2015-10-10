<?php

namespace tests\temp\Foo\Repo;

use tests\temp\Foo\Repo\FooInterface;
use tests\temp\Foo\Entities\Foo as M;

class FooEloquent implements FooInterface{

    protected $foo;

    public function __construct(M $foo)
    {
        $this->foo = $foo;
    }

    public function getAll()
    {
        return $this->foo->all();
    }

    public function find($id)
    {
        return $this->foo->find($id);
    }

    public function create(array $data)
    {
        $foo = $this->foo->create(array(
            'title' => $data['title']
        ));

        if( ! $foo )
        {
            return false;
        }

        return $foo;
    }

    public function update(array $data)
    {
        $foo = $this->foo->findOrFail($data['id']);

        if( ! $foo )
        {
            return false;
        }

        $foo->title = $data['title'];

        $foo->save();

        return $foo;
    }

    public function delete($id)
    {
        $foo = $this->foo->find($id);

        return $foo->delete();
    }
}
