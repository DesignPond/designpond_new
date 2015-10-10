<?php

namespace app\Course\Repo;

use app\Course\Repo\CourseInterface;
use app\Course\Entities\Course as M;

class CourseEloquent implements CourseInterface{

    protected $course;

    public function __construct(M $course)
    {
        $this->course = $course;
    }

    public function getAll()
    {
        return $this->course->all();
    }

    public function find($id)
    {
        return $this->course->find($id);
    }

    public function create(array $data)
    {
        $course = $this->course->create(array(
            'title' => $data['title']
        ));

        if( ! $course )
        {
            return false;
        }

        return $course;
    }

    public function update(array $data)
    {
        $course = $this->course->findOrFail($data['id']);

        if( ! $course )
        {
            return false;
        }

        $course->title = $data['title'];

        $course->save();

        return $course;
    }

    public function delete($id)
    {
        $course = $this->course->find($id);

        return $course->delete();
    }
}
