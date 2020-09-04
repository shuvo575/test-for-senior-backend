<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{

    public function penTaken(){
        return $this->hasMany('\App\PenTaken');
    }

    public function penCount(){
        return $this->penTaken()->count();
    }

    
}
