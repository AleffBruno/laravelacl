<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\User;

class Post extends Model
{
    public function getUser()
    {
    	return $this->belongsTo(User::class,'user_id');
    }
}
