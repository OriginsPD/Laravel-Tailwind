<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class meal_category extends Model
{
    use HasFactory;

    public $table = 'meal_categories';

    public $timestamps = false;

    public $fillable = [
        'category_nm',
    ];

    public function meal_option(): HasMany
    {
       return $this->hasMany(meal_option::class);
    }
}
