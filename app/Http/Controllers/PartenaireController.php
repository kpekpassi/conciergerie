<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Partenaire;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class PartenaireController extends Controller
{

    public function index()
    {
        $transports = Partenaire::where('service_offert','=' ,'transport')->where('etat','=' ,'1')->get();
        $magasins = Partenaire::where('service_offert','=' ,'magasins')->where('etat','=' ,'1')->get();
        $evenementiels = Partenaire::where('service_offert','=' ,'evenementiel')->where('etat','=' ,'1')->get();
        $supermarches = Partenaire::where('service_offert','=' ,'supermarche')->where('etat','=' ,'1')->get();
        $logements = Partenaire::where('service_offert','=' ,'logement')->where('etat','=' ,'1')->get();
        $restaurations = Partenaire::where('service_offert','=' ,'restauration')->where('etat','=' ,'1')->get();
        $travaux = Partenaire::where('service_offert','=' ,'travaux')->where('etat','=' ,'1')->get();

        return view('pages.partenaire',compact('transports','magasins','evenementiels','supermarches','logements','restaurations','travaux'));
    }


    public function listPartenaire()
    {
        $partenaires = Partenaire::orderBy('nom','DESC')->get();
        return view('backend.listPartenaire',compact('partenaires'));
    }

    public function devenirPartenaire(Request $request)
    {
        if ($request->isMethod('POST')) {
           
            $validator = Validator::make($request->all(), [
                'nom' => 'required',
                'fonction' => 'required',
            ]);

             $partenaire_verif = Partenaire::where('email','=' ,$request->email)->first();
             if($partenaire_verif){
                return back()->withErrors($validator)->withInput()->with('error', 'La raison sociale ou le mail est deja utilisé');
             }else{
                if ($request->HasFile('file')) {
                    $cover = $request->file('file');
                    $image = Image::make($cover)->encode('jpg');
                    $image->resize(600, null, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                    $nom_image=str_replace(' ','',$request->nom);
                    Image::make($image)->save('files_upload/partenaire/'.$nom_image.'.jpg');
        
                    $file_name ='files_upload/partenaire/'.$nom_image.'.jpg';
        
                  }else{
        
                    $file_name ="";
                }
    
                $partenaire = new Partenaire();
    
                $partenaire->nom = $request->nom;
                $partenaire->fonction = $request->fonction;
                $partenaire->raison_sociale = $request->raison;
                $partenaire->adresse = $request->adresse;
                $partenaire->telephone = $request->telephone;
                $partenaire->email = $request->email;
                $partenaire->ville = $request->ville;
                $partenaire->pays = $request->pays;
                $partenaire->categorie = $request->categorie;
                $partenaire->site_web = $request->site;
                $partenaire->service_offert = $request->service;
                $partenaire->commission = $request->commission;
                $partenaire->avantage = $request->avantage;
                $partenaire->autre_info = $request->autre;
                $partenaire->logo = $file_name;
                
                $partenaire->save();
    
                return back()->with('mess', 'Demande envoyée avec succès');
             }
            
        }
    }

    public function validerPartenaire(String $id)
    {
        $partenaire = Partenaire::where('id_partenaire','=' ,$id)->first();
        $partenaire->etat = 1;
        $partenaire->save();
        return back()->with('mess', 'Partenaire validé avec succès');
    }

}
