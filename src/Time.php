<?php

namespace BrianFaust\Timeable;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function timeable()
    {
        return $this->morphTo();
    }
}
