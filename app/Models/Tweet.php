<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    protected $fillable = ['content', 'user_id', 'likes_qtd'];


    public function user(){
        return $this->belongsTo(User::class);
    }
    

    public function likes(){
        return $this->hasMany(Like::class);
    }
}
