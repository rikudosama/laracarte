<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;

/**
 * summary
 */
trait DateScopable
{
    public function scopeTwoMonthsOld(Builder $query)
    {
      return $query->where('created_at', '<=', Carbon::parse('2 month ago'));
    }
}
