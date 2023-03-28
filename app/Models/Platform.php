<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Platform extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'name'
    ];

    public function game(): BelongsToMany
    {
        return $this->belongsToMany(Game::class);
    }
}