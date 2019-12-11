<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Association;
use App\Membre;
class SourceController extends Controller
{
  public function   index(){
    $associations=Association::get();
    $title='SOURCE';
    $titre='PRESENTATION DE LA SOURCE';
    $presentation='SOURCE INDEX sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
    return \view('source.index',\compact('associations','title','presentation','titre','3'));

  }

  public function   speech(){
    $associations=Association::get();
    $title='mot du president de la source';
    $presentation='mot president source dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
    $titre='MOT DU PRESIDENT DE LA SOURCE';
    return \view('source.speech',\compact('associations','titre','title','presentation'));


  }
  public function   consulter(){
    $association = Association::with("membres")->findOrFail('4');
    $membres = $association->membres ;
    $title="liste des membres de la source";
     return \view('source.member',\compact('title','membres','4'));

  }
  public function   information(){
    $title="INFORMATIONS";
    $associations=Association::get();
    $contenu="info source sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
    return \view('source.information',\compact('title','contenu','associations'));

  }
  public function   create(){
    $associations=Association::get();
    $title='ajouter membre de la source';
    return \view('source.create',\compact('4','title'));


  }
  public function   store(Request $request){
    $this->validate($request,Membre::REGLES,Membre::MESSAGES);
    Membre::create($request->all());
    return \redirect()->route('source_consulter')->with("success","le membre ".$request->nom."  a été enregistré avec succes");


  }

  public function   edit($id){
    $membre=Membre::find($id);
    $title='modifier';
    return \view('source.edit',compact('membre','title'));

  }


  public function   update(Request $request, $id){
    $membre=Membre::find($id);
    $this->validate($request,Membre::REGLES,Membre::MESSAGES);
    $membre->update($request->all());
    return \redirect()->route('source_consulter')->with("success","le membre ".$request->nom."  a été modifié avec succes");


  }
  public function   delete($id){
    $membre=Membre::find($id);
    $membre->delete();
    return \redirect()->route('source_consulter')->with("success","le membre  ".$membre->nom." a été supprimer avec succes");

  }
}
