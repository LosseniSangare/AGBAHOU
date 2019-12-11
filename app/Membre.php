<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
    protected $fillable=['nom','prenom','profession','filiere','niveau','sexe','contact1','contact2','email','date_naissance','association_id'];

    const REGLES=[
             'nom' =>  "required|max:25" ,
             'prenom' => "required|max:100",
             'date_naissance' =>"required" ,
             'contact1' => "required|max:15",
             'contact2' => "nullable|different:contact1",
             'profession' => "required|max:100",
             'sexe' => "required",
             'email' => "nullable",
            ];
      const MESSAGES=[
               'nom.required' =>  "le nom est obligatoire" ,
               'nom.max' =>  "valeur maximale depassée,max:25" ,
               'prenom.required' => "le prenom est obligatoire",
               'prenom.max' => "valeur maximale depassée,max:100",
               'date_naissance.required' =>"l'email est obligatoire" ,
               'date_naissance.max' =>"l'email est obligatoire,max:255" ,
               'contact1.required' => "le contact1 est obligatoire",
               'contact2.different' => "renseignez un contact different du premier",
               'profession.required' => "la profession est obligatoire",
               'profession.max' => "valeur maximale depassée,max:100",
               'sexe.required' => "le sex est obligatoire",
              ];

    function association(){
      return $this->belongsTo('App\Association');
    }

function cotisations(){
  return $this->hasMany('App\Cotisation','membre');
}

}
