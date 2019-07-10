<?php

namespace App;

use App\Scopes\CompletedScope;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //make column mass assignable
    protected $fillable = ['title'];

    public static function boot()
    {
        parent::boot();
        static::addGlobalScope(function apply(Builder $builder, Model $model)
        {
          return $builder->where('completed', true);
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getTitleCaseAttribute()
    {
        return ucwords($this->title);
    }

    public function setTitleFormatAttribute($value)
    {

        $this->attributes['title'] = "BU/19/".$value;

    }

    public function scopeIsCompleted($query) 
    {
        return $query->where('completed', true);

    }

    public function scopeIsNotCompleted($query)
    {
        return $query->where('completed', false);
    }

    public function scopeUserIdLessThanTen($query)
    {
        return $query->where('id', '<', '2');
    }

}
