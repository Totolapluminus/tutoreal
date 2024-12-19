<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    protected $guarded = [];

    public function users() : BelongsToMany {
        return $this->belongsToMany(User::class)->withPivot('progress', 'role');
    }

    public function lessons() : HasMany {
        return $this->hasMany(Lesson::class);
    }

    public function reviews() : HasMany {
        return $this->hasMany(Review::class);
    }

    public function topics() : BelongsToMany{
        return $this->belongsToMany(Topic::class);
    }
}
