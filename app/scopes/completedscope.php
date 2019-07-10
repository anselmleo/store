<?php

  namespace App\Scopes;

  use Illuminate\Database\Eloquent\{Builder, Model, Scope};

  Class CompletedScope implements Scope
  {
    public function apply(Builder $builder, Model $model)
    {
      return $builder->where('completed', true);
    }
  }