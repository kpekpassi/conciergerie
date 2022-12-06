<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Temoignage;
use App\Models\Partenaire;

class IndexController extends Controller
{
    public function index()
    {
        $temoignages = Temoignage::orderBy('nom','DESC')->get();
        $partenaires = Partenaire::where('etat','=' ,'1')->orderBy('id_partenaire','DESC')->get();

        return view('pages.index',compact('temoignages','partenaires'));
    }
}
