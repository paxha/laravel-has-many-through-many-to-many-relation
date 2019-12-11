<?php

namespace HasManyThroughManyToMany\Tests\Models;

use HasManyThroughManyToMany\Traits\HasManyThroughManyToMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Module extends Model
{
    use SoftDeletes, HasManyThroughManyToMany;

    protected $fillable = [
        'name',
    ];
}
