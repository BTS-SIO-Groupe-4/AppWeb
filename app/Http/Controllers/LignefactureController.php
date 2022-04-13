<?php

namespace App\Http\Controllers;

use App\Models\facture;
use App\Models\lignefacture;
use App\Models\produit;
use Illuminate\Http\Request;

class LignefactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = lignefacture::latest()->paginate(5);
        return view('achats.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $facture_id = $request->facture;
        $produits = produit::all();
        return view('lignefacture.create', compact('facture_id', 'produits'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        lignefacture::create($request->all());
        return redirect()->route('achats.show', $request->facture_id)
                    ->with('success','Achat crée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\lignefacture  $lignefacture
     * @return \Illuminate\Http\Response
     */
    public function show(lignefacture $lignefacture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\lignefacture  $lignefacture
     * @return \Illuminate\Http\Response
     */
    public function edit(lignefacture $lignefacture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\lignefacture  $lignefacture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lignefacture $lignefacture)
    {
        $lignefacture->update($request->all());
        return redirect()->route('achats.index')
                ->with('success','Achat modifier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\lignefacture  $lignefacture
     * @return \Illuminate\Http\Response
     */
    public function destroy(lignefacture $lignefacture)
    {
        $idFact = $lignefacture->facture_id;
        $lignefacture->delete();
        return redirect()->route('achats.show', $idFact)
            ->with('success',"Produit supprimé de l'achat");
    }
}
