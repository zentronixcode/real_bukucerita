<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cerita1 extends Model
{
    protected $fillable=['id_user','title','chapters','content','photo','read','rating'];

    public function Readers(){
        return $this->belongsTo('App\Reader','id_user','id');
    }
}
