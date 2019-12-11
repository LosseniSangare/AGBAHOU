<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    protected $fillable=['nom'];
    function membres(){
      return $this->hasMany('App\Membre');
    }
}
