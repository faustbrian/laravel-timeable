<?php

/*
 * This file is part of Laravel Timeable.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Timeable\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * This is the time class.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Time extends Model
{
     /**
     * @var array
     */
     protected $guarded = ['id', 'created_at', 'updated_at'];

     /**
     * @return mixed
     */
     public function timeable()
     {
         return $this->morphTo();
     }
}
