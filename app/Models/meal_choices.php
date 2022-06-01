<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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


    public function option()
    {
       return $this->belongsTo(meal_option::class);
    }

    public function users()
    {
       return $this->belongsTo(User::class,'user_id');
    }
}
