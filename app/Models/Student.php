<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    // protected $table = '';

    // fillable assignement - Used to write data
    protected $fillable = [
        'first_name',
        'last_name',
        'middle_initial',
        'email',
        'password',
        'contact',
        'college',
        'program',
    ];


    // guarded assignement - Used to disable writing data
    // protected $guarded = [
    //     'first_name'
    // ];

    protected $hidden = [
        'password',
    ];
}
