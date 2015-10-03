<?php

namespace Pond\Repo;

use Pond\Repo\CoursInterface;
use Pond\Entities\Cours as M;

class CoursEloquent implements CoursInterface{

    protected $cours;

    public function __construct(M $cours)
    {
        $this->cours = $cours;
    }

    public function getAll()
    {
        return $this->cours->all();
    }

    public function find($id)
    {
        return $this->cours->find($id);
    }

    public function create(array $data)
    {
        $cours = $this->cours->create(array(
            'title' => $data['title']
        ));

        if( ! $cours )
        {
            return false;
        }

        return $cours;
    }

    public function update(array $data)
    {
        $cours = $this->cours->findOrFail($data['id']);

        if( ! $cours )
        {
            return false;
        }

        $cours->title = $data['title'];

        $cours->save();

        return $cours;
    }

    public function delete($id)
    {
        $cours = $this->cours->find($id);

        return $cours->delete();
    }
}
