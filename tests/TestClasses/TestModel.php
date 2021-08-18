<?php

namespace Humweb\Tags\Test\TestClasses;

use Illuminate\Database\Eloquent\Model;
use Humweb\Tags\HasTags;

class TestModel extends Model
{
    use HasTags;

    public $table = 'test_models';

    protected $guarded = [];

    public $timestamps = false;
}
