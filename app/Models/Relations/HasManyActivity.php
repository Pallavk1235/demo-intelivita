<?php

namespace App\Models\Relations;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Activity;


/**
 * Define a hash-many relationship with activity model.
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */
trait HasManyActivity {
    public function activities() : HasMany {
        return $this->hasMany(Activity::class);
    }
}