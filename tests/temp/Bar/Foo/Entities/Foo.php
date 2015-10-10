<?php

namespace tests\temp\Foo\Entities;

use Illuminate\Database\Eloquent\Model;

class Foo extends Model
{
    /**
    * The table associated with the model.
    *
    * @var string
    */
   protected $table = 'foo';
}