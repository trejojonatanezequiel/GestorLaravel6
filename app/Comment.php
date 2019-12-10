<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['id','comment','valoration','date_time','user_id','event_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
  
}