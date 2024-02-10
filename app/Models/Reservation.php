<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'house_id',
        'start_date',
        'end_date',
    ];

    public function track(): BelongsTo
    {
        return $this->belongsTo(House::class);
    }


    public function features(): BelongsToMany
    {
        return $this->belongsToMany(Feature::class);
    }
}
