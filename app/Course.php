<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $fillable = [
        'name','rate','description','views','levels','active','category_id','hours'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
