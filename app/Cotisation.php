<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cotisation extends Model
{
  protected $fillable=['montant','membre','association'];
  const REGLES=[
           'montant' =>  "required|numeric" ,

          ];

          const MESSAGES=[
                   'montant.numeric' =>  "valeur numerique attendue" ,
                  ];


  function membreLinked(){
    return $this->belongsTo(Membre::class,'membre');
  }

}
