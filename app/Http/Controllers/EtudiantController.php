<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    public function liste_etudiant()
    {
        // Récupérer tous les étudiants de la base de données
        $etudiants = Etudiant::paginate(4);
    
        // Passer la variable $etudiants à la vue
        return view('etudiant.liste', compact('etudiants'));
    }
    
    public function ajouter_etudiant()
    {
        return view('etudiant.ajouter');
    }
    public function ajouter_etudiant_traitement(Request $request)
    {
       $request->validate([
           'nom' => 'required',
           'prenom' => 'required',
           'classe' => 'required',
       ]);

       $etudiant = new Etudiant();
       $etudiant->nom = $request->nom;
       $etudiant->prenom = $request->prenom;
       $etudiant->classe = $request->classe;
       $etudiant->save();

       return redirect('/ajouter')->with('status', 'L\'étudiant a bien été ajouté avec succès.');
      
    }

    public function update_etudiant($id){
        $etudiants = Etudiant::find($id);
        return view('etudiant.update', compact('etudiants'));
    }

    public function update_etudiant_traitement(Request $request){
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required',
        ]);

        $etudiant = Etudiant::find($request->id);
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe = $request->classe;
        $etudiant->update();
        return redirect('/etudiant')->with('status', 'L\'étudiant a bien été modifié avec succès.');
    }

    public function delete_etudiant($id){

        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return redirect('/etudiant')->with('status', 'L\'étudiant a bien été supprimé avec succès.');
    

    }
}
