<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    public static function incomplete($query){

        return $query->where('completed',0);
        //return static::where('completed', 0)->get();
    }
}
