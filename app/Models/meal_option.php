<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class meal_option extends Model
{
    use HasFactory;

    protected $table = 'meal_options';

    public $timestamps = false;

    protected $primaryKey = 'id';

    public $fillable = [
        'option_nm',
        'category_id',
    ];

    public function meal_category(): BelongsTo
    {
        return $this->belongsTo(meal_category::class);
    }

    public function meal_choices(): BelongsTo
    {
        return $this->belongsTo(meal_choices::class);
    }
}
