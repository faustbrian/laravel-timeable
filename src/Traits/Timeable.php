<?php

/*
 * This file is part of Laravel Timeable.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Timeable\Traits;

use DraperStudio\Timeable\Models\Time;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

/**
 * This is the timeable trait.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
trait Timeable
{
    /**
     * @return mixed
     */
    public function times()
    {
        return $this->morphMany(Time::class, 'timeable');
    }

    /**
     * @param Model $time
     */
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
