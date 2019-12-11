<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Membre;
use App\Association;

class FemmeController extends Controller
{
  public function   index(){
    $associations=Association::get();
    $title='femme';
    $titre='PRESENTATION DE L\'ASSOCIATION DES FEMMES';
    $presentation='femme index dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
     return \view('femme.index',\compact('title','presentation','titre'));

  }
  public function   speech(){
    $titre='mot du president des femmes';
    $title='MOT DU PRESIDENTE DES FEMMES';
    $presentation='president des femmes dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    $associations=Association::get();
    return \view('femme.speech',\compact('titre','associations','presentation','title'));

  }
  public function   consulter(){
    $association = Association::with("membres")->findOrFail('5');
    $membres = $association->membres ;
    $title="liste de membres des femmes";
    $associations=Association::get();
    return \view('femme.member',\compact('membres','title','associations'));

  }
  public function   information(){
    $titre='information femmes';
    $title='INFORMATIONS FEMME';
    $presentation='informer FEMME dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    $associations=Association::get();
    return \view('femme.information',\compact('titre','associations','presentation','title'));

  }
  public function   create(){
    $associations=Association::get();
    $title='ajouter femme';
    return \view('femme.create',\compact('5','title'));


  }
  public function   store(Request $request){
    $this->validate($request,Membre::REGLES,Membre::MESSAGES);
    Membre::create($request->all());
    return \redirect()->route('femme_consulter')->with("success","le membre ".$request->nom."  a été enregistré avec succes");


  }

  public function   edit($id){
    $membre=Membre::find($id);
    $title='modifier';
    return \view('femme.edit',compact('membre','title'));


  }


  public function   update(Request $request, $id){
    $membre=Membre::find($id);
    $this->validate($request,Membre::REGLES,Membre::MESSAGES);
    $membre->update($request->all());
    return \redirect()->route('femme_consulter')->with("success","le membre ".$request->nom."  a été modifié avec succes");


  }
  public function   delete($id){
    $membre=Membre::find($id);
    $membre->delete();
    return \redirect()->route('femme_consulter')->with("success","le membre ".$membre->nom."  a été supprimé avec succes");

  }
}
