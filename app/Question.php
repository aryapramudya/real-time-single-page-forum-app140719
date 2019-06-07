<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Reply;
use App\Category;

class Question extends Model
{
    public function user(){
    	return $this->belongsTo(User);
    }

    public function replies(){
    	return $this->hasMany(Reply);
    }

    public function category(){
    	return $this->belongsTo(Category);
    }
}
