<?php

namespace BrianFaust\Timeable\Traits;

use Carbon\Carbon;
use BrianFaust\Timeable\Models\Time;

trait Timeable
{
    public function times()
    {
        return $this->morphMany(Time::class, 'timeable');
    }

    public function addTime($day, $open, $close)
    {
        $time = new Time([
            'day' => $day,
            'open' => new Carbon($open),
            'close' => new Carbon($close),
        ]);

        $this->times()->save($time);
    }
}
