<?php

namespace App\Http\Controllers;

use App\Models\RdvComCli;
use Illuminate\Http\Request;
use App\Models\Employe;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RdvComCliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->PosteEmp == 0) {
            $data = RdvComCli::where('employe_id', Auth::user()->id)->latest()->paginate(5);
        } else {
            $data = RdvComCli::latest()->paginate(5);
        }       
        $emp = Employe::all();

        
        return view('rdvcomcli.index', compact('data', 'emp'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = Client::all();
        return view('rdvcomcli.create',compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        RdvComCli::create($request->all());

        return redirect()->route('rdvcomcli.index')
                    ->with('success','Rendez-vous crée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RdvComCli  $RdvComCli
     * @return \Illuminate\Http\Response
     */
    public function show(RdvComCli $RdvComCli)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RdvComCli  $RdvComCli
     * @return \Illuminate\Http\Response
     */
    public function edit(RdvComCli $RdvComCli)
    {
        $client = Client::all();
        $emp = Employe::all();
        return view('rdvcomcli.edit',compact('RdvComCli', 'client', 'emp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RdvComCli  $RdvComCli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RdvComCli $RdvComCli)
    {
        $RdvComCli->update($request->all());
        return redirect()->route('rdvcomcli.index')
                ->with('success','Rendez-vous créer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RdvComCli  $RdvComCli
     * @return \Illuminate\Http\Response
     */
    public function destroy(RdvComCli $RdvComCli)
    {
        $RdvComCli->delete();
        return redirect()->route('rdvcomcli.index')
            ->with('success','Rendez-Vous Supprimé');
    }
}
