<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class meal_choices extends Model
{
    use HasFactory;

    public $table = 'meal_choices';

    public $timestamps = false;

    public $fillable = [
        'user_id',
        'option_id',
        'date',
    ];


    public function meal_option(): BelongsTo
    {
        return $this->belongsTo(meal_option::class);
    }

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
