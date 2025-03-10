<?php
declare(strict_types=1);

namespace App\Models\Scopes;
use Illuminate\Database\Eloquent\Builder;

/**
 * Scope a query to order by rank.
 *
 * @param Builder $query
 * @return Builder
 */
trait ByRank {
    public function scopeByRank(Builder $query) : Builder {
        return $query->orderBy('rank', 'asc');
    }
}