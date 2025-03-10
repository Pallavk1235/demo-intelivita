<?php

namespace App\Models\Relations;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;


/**
 * Define a BelongsTo relationship with users model.
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
trait BelongsToUser {
    public function users() : BelongsTo {
        return $this->belongsTo(User::class);
    }
}