<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class meal_option extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = 'id';

    public $fillable = [
        'option_nm',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(meal_category::class);
    }

    public function choice()
    {
        return $this->belongsTo(meal_choices::class,'option_id','option_id');
    }
}
