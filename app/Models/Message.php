<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Scopes\DateScopable;

class Message extends Model
{
    use DateScopable;
    protected $fillable = ['name', 'email', 'message'];

    // public function scopeTwoMonthsOld(Builder $query)
    // {
    //   return $query->where('created_at', '<=', Carbon::parse('2 month ago'));
    // }
}
