<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('backend.createUser');
    }

    public function dashboard()
    {

        return view('backend.index');
    }

    public function listUser()
    {
        $users = User::orderBy('id_user','ASC')->get();
        return view('backend.listUser',compact('users'));
    }

    public function ajouterUser(Request $request)
    {
        if ($request->isMethod('POST')) {
            //dd(request()->all());
            $request->validate([
                'nom' => 'required',
                'prenom' => 'required',
                'email' => 'required',
            ]);

            $user = new User();
            $user->nom = $request->nom;
            $user->prenom = $request->prenom;
            $user->email = $request->email;
            $user->password = password_hash($request->password, PASSWORD_DEFAULT);
           
            $user->save();

            return back()->with('mess', 'Utilisateur ajouté avec succès');
        }
    }

    public function deleteUser(String $id)
    {
        $user = User::where('id_user','=' ,$id)->first();
        $user->delete();
        return redirect()->back();
    }

           public function login(Request $request)
         {
        if ($request->email=="monoservice@gmail.com" && $request->password=="admin") {
             
            Cookie::queue('nom_user','admin' , 5000);
            Cookie::queue('prenom_user', '' , 5000);
            Cookie::queue('email_user', $request->email  , 5000);

            return redirect()->route('index.dashboard');
        }
        
		$result = User::where(['email' => $request->email])->first();
        /* verifie si le les identifiant de l'utilisateur sont null il envoi erruer*/
        if ($result==null) {
             Session()->flash('error','Nom d\'utilisateur ou mot de passe incorrecte ');
             return redirect()->back();
            /* si non il envoi les resultats de la requete */
        }  
		
        if (password_verify($request->password, $result->password))
        {
            //**** mise en cookie des données de l'utilisateur**//
            Cookie::queue('nom_user',$result->nom , 5000);
            Cookie::queue('prenom_user', $result->prenom , 5000);
            Cookie::queue('email_user', $result->email  , 5000);
            
            return redirect()->route('index.dashboard');
        }
	}


	public function logout()
    {
        return redirect('/');
    }


    public function deconnection()
    {
        Cookie::queue(Cookie::forget('nom_user'));
        Cookie::queue(Cookie::forget('prenom_user'));
        Cookie::queue(Cookie::forget('email_user'));
        
        return $this->logout();
    }
}
