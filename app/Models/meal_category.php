<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class meal_category extends Model
{
    use HasFactory;

    public $table = 'meal_categories';

    public $timestamps = false;

    public $fillable = [
        'category_nm',
    ];

    public function Meal_options()
    {
        $this->hasMany(meal_option::class,'category_id','id');
    }
}
