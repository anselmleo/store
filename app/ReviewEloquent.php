<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReviewEloquent extends Model
{
    //
    protected $fillable = ['heading','notes','comments',];

    public function review()
    {

    }
}
