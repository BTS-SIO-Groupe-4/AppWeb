<?php

namespace App\Http\Controllers;

use App\Models\Achat;
use Illuminate\Http\Request;

class AchatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Achat::latest()->paginate(5);

        return view('achat.index', compact('data'))
            ->with('i', (request()->input('page',1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('achat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'IdAchat' => 'required|integer',
            'IdCli' => 'required|integer',
            'IdCom' => 'required|integer',
            'IdProd' => 'required|integer',
            'Qte' => 'required|integer',
            
        ]);


        Achat::create($request->all());

        return redirect()->route('achat.index')
                        ->with('success','Achat Crée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Achat  $achat
     * @return \Illuminate\Http\Response
     */
    public function show(Achat $achat)
    {
        return view('achat.show', compact('achat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Achat  $achat
     * @return \Illuminate\Http\Response
     */
    public function edit(Achat $achat)
    {
        return view('achat.edit',compact('achat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Achat  $achat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Achat $achat)
    {
        $request->validate([
            'IdCli' => 'required|integer',
            'IdEmp' => 'required|integer',
            'IdProd' => 'required|integer',
            'Qte' => 'required|integer',
            ]);
            
            $achat->update($request->all());

            return redirect()->route('achat.index')
                            ->with('success','Achat Modifiée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Achat  $achat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Achat $achat)
    {
        $achat->delete();

        return redirect()->route('achat.index')
                        ->with('success','Achat Supprimé');
    }
}
