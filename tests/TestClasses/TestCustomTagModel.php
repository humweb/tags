<?php

namespace Humweb\Tags\Test\TestClasses;

use Humweb\Tags\Tag;

class TestCustomTagModel extends Tag
{
    public $table = 'custom_tags';

    public array $translatable = ['name', 'slug', 'description'];
}
