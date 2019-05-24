<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;


class Task extends Model
{
    //make column mass assignable
    protected $fillable = ['title'];
}
