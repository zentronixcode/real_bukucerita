<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reader extends Model
{
    protected $fillable=['id_user'];

    public function Stories(){
        return $this->hasMany('App\Stories','id','id_user');
    }
}
