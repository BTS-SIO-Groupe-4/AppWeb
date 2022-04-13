<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EmployesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->PosteEmp == 0){
            abort(401, 'non autorisé');
        }

       $data = Employe::latest()->paginate(5);

        return view('employes.index', compact('data'))
            ->with('i', (request()->input('page',1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::user()->PosteEmp == 0){
            abort(401, 'non autorisé');
        }

        $request->validate([
            'NomEmp' => 'required|string',
            'PrenomEmp' => 'required|string',
            'MailEmp' => 'required|string',
            'MdpEmp' => 'required|string',          
        ]);

        Employe::create([
            'NomEmp' => $request->input('NomEmp'),
            'PrenomEmp' => $request->input('PrenomEmp'),
            'TelEmp' => $request->input('TelEmp'),
            'MailEmp' => $request->input('MailEmp'),
            'MdpEmp' => Hash::make($request->input('MdpEmp')),
        ]);

        return redirect()->route('employes.index')
                        ->with('success','Employé crée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function show(Employe $employe)
    {
        if (Auth::user()->PosteEmp == 0){
            abort(401, 'non autorisé');
        }

        return view('employes.show', compact('employe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function edit(Employe $employe)
    {
        if (Auth::user()->PosteEmp == 0){
            abort(401, 'non autorisé');
        }

        return view('employes.edit',compact('employe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employe $employe)
    {
        if (Auth::user()->PosteEmp == 0){
            abort(401, 'non autorisé');
        }

        $request->validate([
            'IdEmp' => 'required|integer',
            'NomEmp' => 'required|string',
            'PrenomEmp' => 'required|string',
            'TelEmp' => 'required|integer',
            'MailEmp' => 'required|string',
            'MdpEmp' => 'required|string',
            'PosteEmp' => 'required|integer',
            ]);
            
            $employe->update($request->all());

            return redirect()->route('employes.index')
                            ->with('success','Employé modifiée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employe $employe)
    {
        if (Auth::user()->PosteEmp == 0){
            abort(401, 'non autorisé');
        }
 
        $employe->delete();
        return redirect()->route('employes.index')
                        ->with('succes','Employé Supprimé');
    }
}
