<?php



declare(strict_types=1);

namespace BrianFaust\Timeable;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Time extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function timeable(): MorphTo
    {
        return $this->morphTo();
    }
}
