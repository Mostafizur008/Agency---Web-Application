<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category\Category;

class Team extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

}
