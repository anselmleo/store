<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //make column mass assignable
    protected $fillable = ['title'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
