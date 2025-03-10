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
trait ByType {
    public function scopeByType(Builder $query, $activityType) : Builder {
        $query->where('activity_type', $activityType);
    }
}