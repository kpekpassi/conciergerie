<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Temoignage;
use Intervention\Image\Facades\Image;

class TemoignageController extends Controller
{
    public function index()
    {
        return view('backend.createTemoignage');
    }

    public function listTemoignage()
    {
        $temoignages = Temoignage::orderBy('nom','DESC')->get();
        return view('backend.listTemoignage',compact('temoignages'));
    }

    public function listTemoignageFront()
    {
        $temoignages = Temoignage::orderBy('nom','DESC')->get();
        return view('pages.temoignage',compact('temoignages'));
    }

    public function ajouterTemoignage(Request $request)
    {
        if ($request->isMethod('POST')) {
            //dd(request()->all());
            $request->validate([
                'nom' => 'required',
                'fonction' => 'required',
                'description' => 'required',
            ]);

            if ($request->HasFile('file')) {
                $cover = $request->file('file');
                $image = Image::make($cover)->encode('jpg');
                $image->resize(600, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $nom_image=str_replace(' ','',$request->nom);
                Image::make($image)->save('files_upload/temoignage/'.$nom_image.'.jpg');
    
                $file_name ='files_upload/temoignage/'.$nom_image.'.jpg';
    
              }else{
    
                $file_name ="";
             }

            $temoignage = new Temoignage();
            $temoignage->nom = $request->nom;
            $temoignage->fonction = $request->fonction;
            $temoignage->description = $request->description;
            $temoignage->logo =  $file_name;
           
            $temoignage->save();

            return back()->with('mess', 'Temoignage ajouté avec succès');
        }
    }

        public function modifierTemoignage($id)
    {
        $temoignage = Temoignage::where('id_temoignage','=' ,$id)->first();
        return view('backend.modifTemoignage',compact('temoignage'));
    }

    public function editTemoignage($id,Request $request)
    {
        if ($request->isMethod('POST')) {
            //dd(request()->all());
            $request->validate([
                'nom' => 'required',
                'fonction' => 'required',
                'description' => 'required',
            ]);
            $temoignage = Temoignage::where('id_temoignage','=' ,$id)->first();

            if ($request->HasFile('file')) {
                $cover = $request->file('file');
                $image = Image::make($cover)->encode('jpg');
                $image->resize(600, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
                Image::make($image)->save('files_upload/temoignage/'.$id.'.jpg');
    
                $file_name ='files_upload/temoignage/'.$id.'.jpg';
    
              }else{
    
                $file_name =$temoignage->logo;
             }
           
            $temoignage->nom = $request->nom;
            $temoignage->fonction = $request->fonction;
            $temoignage->description = $request->description;
            $temoignage->logo =  $file_name;
           
            $temoignage->save();

            return redirect()->route('liste.temoignage')->with('mess', 'Temoignage modifieré avec succès');
        }
    }

    public function deleteTemoignage(String $id)
    {
        $temoignage = Temoignage::where('id_temoignage','=' ,$id)->first();
        $temoignage->delete();
        return back()->with('mess', 'Temoignage supprimé avec succès');
    }

 }
