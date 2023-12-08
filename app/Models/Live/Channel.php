<?php

namespace App\Models\Live;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Channel extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class,'author','id');
    }
}
