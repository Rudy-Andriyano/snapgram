<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LikePhoto extends Model
{
    //
    protected $table='likes';
    protected $primaryKey = 'likeID';
    protected $fillable = ['tanggalLike','fotoID','userID'];

    public function album(){
        return $this->belongsTo(Album::class,'albumID');
    }
    public function user(){
        return $this->belongsTo(User::class,'userID');
    }
    public function likes(){
        return $this->hasMany(LikePhoto::class,'fotoID');
    }

    public function isLikedByAuthUser(){
        return $this->likes()->where('userID',Auth::user()->userID)->exists();
    }
}
