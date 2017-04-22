<?php



declare(strict_types=1);

namespace BrianFaust\Timeable;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait HasTimesTrait
{
    public function times(): MorphMany
    {
        return $this->morphMany(Time::class, 'timeable');
    }

    public function addTime($day, $open, $close): bool
    {
        $time = new Time([
            'day'   => $day,
            'open'  => new Carbon($open),
            'close' => new Carbon($close),
        ]);

        return (bool) $this->times()->save($time);
    }
}
