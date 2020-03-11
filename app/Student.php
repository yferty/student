<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;

    const ACTIVE = 1;   // учится
    const INACTIVA = 0; // закончил

    protected $table = 'students';

    protected $fillable = ['name', 'surname', 'email', 'status', 'rating'];
}
