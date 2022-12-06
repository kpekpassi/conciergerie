<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Devi;
use App\Models\DevisExpress;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class DevisController extends Controller
{
    public function index()
    {
        return view('pages.demande_devis');
    }


    public function listDevis()
    {
        $devis = Devi::orderBy('id_devis','DESC')->get();
        return view('backend.listDemandeDevis',compact('devis'));
    }

    public function listDevisExpress()
    {
        $devis = DevisExpress::orderBy('id_devis_express','DESC')->get();
        return view('backend.listDevisExpress',compact('devis'));
    }


    public function demanderDevis(Request $request)
    {
        if ($request->isMethod('POST')) {
           
            $validator = Validator::make($request->all(), [
                'nom' => 'required',
                'fonction' => 'required',
            ]);
    
                $devis = new Devi();

                $devis->type = $request->type;
                $devis->nom = $request->nom;
                $devis->raison_sociale = $request->raison;
                $devis->civilite = $request->civilite;
                $devis->ville = $request->ville;
                $devis->pays = $request->pays;
                $devis->service = $request->service;
                $devis->contrainte = $request->contrainte;
                $devis->besoin = $request->besoin;
                $devis->telephone = $request->telephone;
                $devis->email = $request->email;
               
                 $devis->save();
    
                return back()->with('mess', 'Votre demande est envoyée avec succès');
            
        }
    }

    public function demanderDevisExpress(Request $request)
    {
        if ($request->isMethod('POST')) {
           
            $validator = Validator::make($request->all(), [
                'nom' => 'required',
                'fonction' => 'required',
            ]);
    
                $devis = new DevisExpress();

                $devis->ville_depart = $request->ville_depart;
                $devis->ville_arrive = $request->ville_arrive;
                $devis->date_depart = $request->date_depart;
                $devis->date_arrive = $request->date_arrive;
                $devis->nombre_pers = $request->nombre_pers;
                $devis->lieu_depart = $request->lieu_depart;
                $devis->lieu_arrive = $request->lieu_arrive;
                $devis->type_reservation = $request->type_reservation;
                $devis->type_evenement = $request->type_evenement;
                $devis->lieu = $request->lieu;
                $devis->date_envoi = $request->date_envoi;
                $devis->date_arrive = $request->date_arrive;
                $devis->poids = $request->poids;
                $devis->type_service = $request->type_service;
                $devis->email = $request->email;
                $devis->nom = $request->nom;
                $devis->telephone = $request->telephone;
                $devis->adresse = $request->adresse;
               
                 $devis->save();
    
                return back()->with('mess', 'Votre demande est envoyée avec succès');
            
        }
    }

}
