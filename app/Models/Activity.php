<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Relations\BelongsToUser;
use App\Models\Scopes\ByFilter;
use App\Models\Scopes\ByType;

class Activity extends Model
{
    //
    use HasFactory, BelongsToUser, ByFilter, ByType;
}
