<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable=['title','content','photo','read'];

    public function Readers(){
        return $this->belongsTo('App\Reader','id_user','id');
    }
}
