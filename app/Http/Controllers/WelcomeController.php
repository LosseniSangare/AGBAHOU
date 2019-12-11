<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function presentation(){
      $title='presentation';
      $titre="Presentation du village";
      // $presentation="fdsl,l, vodfld,fls,dofdslf;edldf";
      $presentation="Agabou est un village du département d'Akoupé,
       en Côte d'Ivoire dans la région de La Mé. Il est le premier
       village du canton Kietun en venant d'Abidjan ou d'Adzopé. C'est un
       village moderne avec des infrastructures de base (eau, électricité, téléphone).
       Le village d'Agbaou se situe en zone forestière et fait partie de l'ancienne boucle du Cacao.
       On y retrouve donc plantations de cacao, de café et plus récemment des plantations d'hévea.
       Agbaou produit également des produits vivriers tels la banane plantain, le manioc, le tarot,
       du riz et des legumes divers dont l'aubergine, le gombo, la tomate, le piment, etc.  ";
      return \view('acceuil.presenter',compact('title','titre','presentation')) ;
    }
    public function speech(){
      $titre="Mot du chef duvillage";
      $title='Mot du chef ';
      $presentation="ipsdsfoh,ipçcisdinfskfkdsjkvjsvdugjhrodsnjcncxcss";
      return \view('acceuil.speech',compact('titre','title','presentation')) ;
    }
    public function news(){
      $title='Mot du chef du village';
      $presentation="ipsdsfoh,ipçcisdinfskfkdsjkvjsvdugjhrodsnjcncxcss";
      return \view('acceuil.news',compact('title','presentation')) ;
    }
    public function event(){
      $title='Mot du chef du village';
      $presentation="ipsdsfoh,ipçcisdinfskfkdsjkvjsvdugjhrodsnjcncxcss";
      return \view('acceuil.event',compact('title','presentation')) ;
    }

}
