<?php

namespace App\Models\Others\Info;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Live\Channel;

class Info extends Model
{
    public function channel()
    {
        return $this->belongsTo(Channel::class,'channel_id','id');
    }
}
