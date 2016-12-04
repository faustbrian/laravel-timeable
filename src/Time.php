<?php

/*
 * This file is part of Laravel Timeable.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

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
