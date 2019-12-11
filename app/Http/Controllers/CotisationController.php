<?php

namespace App\Http\Controllers;
use App\Cotisation;
use App\Membre;
use Illuminate\Http\Request;

class CotisationController extends Controller
{
  public function index(){
  $title="acceuil cotisations de f3add";
  $cotisations=Cotisation::where('association','=','3')->get() ;
  return \view('cotisations.f3add.index',\compact('title','cotisations'));

  }

  public function add($id){
    $title="ajouter cotisation";
    $id=$id;
return \view('cotisations.f3add.cotiser',compact('id','title'));

   }
  public function store(Request $request){
    $this->validate($request,Cotisation::REGLES,Cotisation::MESSAGES);
    $membre=Membre::find($request->membre);
    Cotisation::create($request->all());

    return \redirect()->route('cotisation_f3add_index')->with('success','la cotisation du membre  '.$membre->nom .' est efffectué avec succes');

  }
  public function edit($id){
    $title="modifier";
    $cotisation=Cotisation::findOrFail($id);
    return \view('cotisations.f3add.edit',compact('title','cotisation'));

  }

  public function update(Request $request, $id ){
    $cotisation=Cotisation::findOrFail($id);
    $cotisation->montant=$request->montant;
    $cotisation->save();
    return \redirect()->route('cotisation_f3add_index')->with('success','le montant du membre '.$cotisation->membreLinked->nom.' à été mdifier avec succes');

  }
  public function show($id ){
       $title='voir information';
       $membre=Membre::findOrFail($id);
       $total = null ;
       foreach ($membre->cotisations as $cotisation ) {
         $total+=$cotisation->montant;
       }
 return \view('cotisations.f3add.voir',\compact('title','membre','total'));
  }

}
