<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Association;
use App\Membre;

class MudaController extends Controller
{
  public function   index(){
    $title="MUDA";
     $titre="PRESENTATION";
     $associations=Association::get();
     $presentation="ahoussou ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
     return \view('muda.index',\compact('titre','presentation','title','1','associations'));

  }
  public function   speech(){
     $title="MOT DU PRESIDENT";
     $associations=Association::get();
     $discour="ollele ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
        return \view('muda.speech',\compact('title','discour','associations'));
  }

  public function   information(){
    $title="INFORMATIONS";
    $associations=Association::get();
    $contenu="jean ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
    return \view('muda.information',\compact('title','contenu','associations'));

  }

  public function   create(){
    $associations=Association::get();
    $title='ajouter membre';
    return \view('muda.create',\compact('1','title'));

  }
  public function   store(Request $request){
    $this->validate($request,Membre::REGLES,Membre::MESSAGES);
    Membre::create($request->all());
    return \redirect()->route('muda_consulter')->with("success","le membre ".$request->nom."  a été enregistré avec succes");
  }

  public function   edit($id){
    $membre=Membre::find($id);
    $title='modifier';
    return \view('muda.edit',compact('membre','title'));

  }


  public function   update(Request $request, $id){
    $membre=Membre::find($id);
    $this->validate($request,Membre::REGLES,Membre::MESSAGES);
    $membre->update($request->all());
    return \redirect()->route('muda_consulter')->with("success","le membre ".$request->nom."  a été modifié avec succes");


  }
  public function   delete($id){
    $membre=Membre::find($id);
    $membre->delete();
    return \redirect()->route('muda_consulter')->with("success","le membre ".$membre->nom."  a été supprimé avec succes");


  }
  public function   consulter(){
    $association = Association::with("membres")->findOrFail('1');
    $membres = $association->membres ;
    $title="liste de membres";
    return \view('muda.member',\compact('membres','title'));
  }
}
