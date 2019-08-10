<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mystories extends Model
{
    protected $fillable=['title','chapters','content','photo','read','rating'];

    public function Readers(){
        return $this->belongsTo('App\Reader','id_user','id');
    }
}
