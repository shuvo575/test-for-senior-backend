<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{

    public function penTaken(){
        return $this->hasMany('\App\PenTaken');
    }

    public function penCount(){
        return $this->penTaken()->sum('pen_taken.amount');
    }

    public function diaryTaken(){
        return $this->hasMany('\App\DiaryTaken');
    }

    public function diaryCount(){
        return $this->diaryTaken()->sum('diary_taken.amount');
    }

    public function eraserTaken(){
        return $this->hasMany('\App\EraserTaken');
    }

    public function eraserCount(){
        return $this->eraserTaken()->sum('eraser_taken.amount');
    }

    public function totalItems(){
        return $this->eraserCount() + $this->diaryCount() + $this->penCount();
    }

}
