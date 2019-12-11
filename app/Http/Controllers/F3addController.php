<?php

namespace App\Http\Controllers;
use App\membre;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;
use App\Association;
class F3addController extends Controller
{
  public function   index(){
    $associations=Association::get();
    $title='F3ADD';
    $titre='PRESENTATION DU F3ADD';
    $presentation='F3ADD INDEX sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
    return \view('f3add.index',\compact('associations','title','presentation','titre','3'));


  }
  public function   speech(){
    $associations=Association::get();
    $title='mot du president de f3add';
    $presentation='mot president f3add dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
    $titre='MOT DU PRESIDENT DE F3ADD';
    return \view('f3add.speech',\compact('associations','titre','title','presentation'));
  }
  public function   consulter(){
    $association = Association::with("membres")->findOrFail('3');
    $membres = $association->membres ;
    $title="liste de membres";
    $associations=Association::get();
     return \view('f3add.member',\compact('associations','title','membres','3'));
  }
  public function   information(){
    $title="INFORMATIONS";
    $associations=Association::get();
    $contenu="info f3add sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
    return \view('f3add.information',\compact('title','contenu','associations'));

  }
  public function   create(){
    $associations=Association::get();
    $title='ajouter membre';
    return \view('f3add.create',\compact('3','title'));

  }
  public function   store(Request $request){
    $this->validate($request,Membre::REGLES,Membre::MESSAGES);
    Membre::create($request->all());
    return \redirect()->route('f3add_consulter')->with("success","le membre ".$request->nom."  a été enregistré avec succes");

  }

  public function edit($id){
    $membre=Membre::find($id);
    $title='modifier';
    return \view('f3add.edit',compact('membre','title'));

  }


  public function   update(Request $request, $id){
    $membre=Membre::find($id);
    $this->validate($request,Membre::REGLES,Membre::MESSAGES);
    $membre->update($request->all());
    return \redirect()->route('f3add_consulter')->with("success","le membre ".$request->nom."  a été modifié avec succes");


  }
  public function   delete($id){
    $membre=Membre::find($id);
    $membre->delete();
    return \redirect()->route('f3add_consulter')->with("success","le membre ".$membre->nom."  a été suprimer avec succes");

  }



}
