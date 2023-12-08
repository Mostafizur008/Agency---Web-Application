<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category\Subcategory;

class Category extends Model
{
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }
}
