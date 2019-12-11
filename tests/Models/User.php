<?php

namespace HasManyThroughManyToMany\Tests\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use HasManyThroughManyToMany\Traits\HasManyThroughManyToMany;

class User extends Model
{
    use SoftDeletes, HasManyThroughManyToMany;

    protected $fillable = [
        'name',
    ];
}
