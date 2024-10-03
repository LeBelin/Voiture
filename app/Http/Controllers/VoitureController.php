<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $voitures = Voiture::paginate(50);
        return view('voitures.index', compact('voitures'))
            ->with('i', (request()->input('page', 1) - 1) * 50);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('voitures.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'vin' => 'required',
            'couleur' => 'required',
            'nbPlaces' => 'required',
            'cylindree' => 'required',
            'puissance' => 'required',
            'poids' => 'required',
            'longeur' => 'required',
        ];
        $customMessages = [
            'vin.required' => 'Vous devez entrer un numéro de vin.',
            'couleur.required' => 'Vous devez entrer une couleur.',
            'nbPlaces.required' => 'Vous devez entrer un nombre de place',
            'cylindree.required' => 'Vous devez entrer un nombre de cylindreee',
            'puissance.required' => 'Vous devez entrer la puissance de la voiture',
            'poids.required'  => 'Vous devez entrer un poids',
            'longeur.required' => 'Vous devez entrer une longeur',
        ];
        $request->validate($rules, $customMessages);

        Voiture::create($request->all());
        return redirect()->route('voitures.index')
            ->with('success','Voitures ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Voiture $voiture)
    {
        return view('voitures.show',compact('voiture'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Voiture $voiture)
    {
        return view('voitures.edit',compact('voiture'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Voiture $voiture)
    {
        $rules = [
            'vin' => 'required',
            'couleur' => 'required',
            'nbPlaces' => 'required',
            'cylindree' => 'required',
            'puissance' => 'required',
            'poids' => 'required',
            'longeur' => 'required',
        ];
        $customMessages = [
            'vin.required' => 'Vous devez entrer un numéro de vin.',
            'couleur.required' => 'Vous devez entrer une couleur.',
            'nbPlaces.required' => 'Vous devez entrer un nombre de place',
            'cylindree.required' => 'Vous devez entrer un nombre de cylindreee',
            'puissance.required' => 'Vous devez entrer la puissance de la voiture',
            'poids.required'  => 'Vous devez entrer un poids',
            'longeur.required' => 'Vous devez entrer une longeur',
        ];
        $request->validate($rules, $customMessages);

        $voiture->update($request->all());
        return redirect()->route('voitures.index')
            ->with('success','Voiture mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Voiture $voiture)
    {
        $voiture->delete();
        return redirect()->route('voitures.index')
            ->with('success','Voiture supprimé avec succès');
    }
}
