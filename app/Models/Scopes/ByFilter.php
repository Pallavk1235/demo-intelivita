<?php
declare(strict_types=1);

namespace App\Models\Scopes;
use Illuminate\Database\Eloquent\Builder;

/**
 * Scope a query to order by rank.
 *
 * @param Builder $query
 * @return Builder
 * 
 * static method use
 * 
 * byDate()
 * byMonth()
 * byYear()
 * 
 */
trait ByFilter {
    public function scopeByDate(Builder $query) : Builder {
        return $query->whereDate('performed_at', today());
    }
    public function scopeByMonth(Builder $query) : Builder {
        return $query->whereMonth('performed_at', today()->month);
    }
    public function scopeByYear(Builder $query) : Builder {
        return $query->whereYear('performed_at', today()->year);
    }
}