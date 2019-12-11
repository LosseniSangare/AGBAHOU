<?php

namespace App\Http\Controllers;
use App\Membre;
use Illuminate\Http\Request;
use App\Association;

class JeunesseController extends Controller
{
  public function   index(){
    $associations=Association::get();
    $title='jeunesse';
    $titre='PRESENTATION DE LA JEUNESSE';
    $presentation='jeunesse dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

    return \view('jeunesse.index',\compact('associations','title','presentation','titre'));

  }
  public function   speech(){
    $titre='mot du president des jeunes';
    $title='MOT DU PRESIDENT DES JEUNES';
    $presentation='president des jeune dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    $associations=Association::get();
    return \view('jeunesse.speech',\compact('titre','associations','presentation','title'));

  }
  public function   consulter(){
    $association = Association::with("membres")->findOrFail('2');
    $membres = $association->membres ;
    $title="liste de membres";
    $associations=Association::get();
    return \view('jeunesse.member',\compact('membres','title','associations'));

  }
  public function   information(){
    $titre='information jeunesse';
    $title='INFORMATIONS JEUNESSE';
    $presentation='informer dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';
    $associations=Association::get();
    return \view('jeunesse.information',\compact('titre','associations','presentation','title'));

  }
  public function   create(){
    $associations=Association::get();
    $title='ajouter membre';
    return \view('jeunesse.create',\compact('2','title'));


  }
  public function   store(Request $request){
    $this->validate($request,Membre::REGLES,Membre::MESSAGES);
    Membre::create($request->all());
    return \redirect()->route('jeunesse_consulter')->with("success","le membre ".$request->nom."  a été enregistré avec succes");


  }

  public function   edit($id){
    $membre=Membre::find($id);
    $title='modifier';
    return \view('jeunesse.edit',compact('membre','title'));


  }


  public function   update(Request $request, $id){
    $membre=Membre::find($id);
    $this->validate($request,Membre::REGLES,Membre::MESSAGES);
    $membre->update($request->all());
    return \redirect()->route('jeunesse_consulter')->with("success","le membre ".$request->nom."  a été modifié avec succes");


  }
  public function   delete($id){
     $membre=Membre::find($id);
     $membre->delete();
     return \redirect()->route('jeunesse_consulter')->with("success","le membre ".$membre->nom."  a été modifié avec succes");
  }
}
