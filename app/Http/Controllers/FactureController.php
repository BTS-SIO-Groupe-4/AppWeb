<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\facture;
use App\Models\lignefacture;
use Illuminate\Http\Request;

class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = facture::latest()->paginate(5);
        return view('achats.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = Client::all();
        return view('achats.create', compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        facture::create($request->all());

        return redirect()->route('achats.index')
                    ->with('success','Achat crée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function show(facture $facture)
    {
        $detailfact = lignefacture::where('facture_id', $facture->id)->paginate(5);
        return view('achats.show', compact('facture', 'detailfact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function edit(facture $facture)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, facture $facture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function destroy(facture $facture)
    {
        lignefacture::where('facture_id', $facture->id)->delete();
        $facture->delete();
        return redirect()->route('achats.index')
                    ->with('success','Achat supprimé');
    }
}
