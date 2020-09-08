<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content', 'team_id', 'user_id'];
    
    public function team (){
        return $this->belongsTo(Team::class);
    }
    public function users (){
        return $this->belongsTo(User::class);
    }
}
