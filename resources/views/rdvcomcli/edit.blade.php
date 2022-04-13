@extends('..\template')

@section('title')
    Modifier le rendez-vous
@endsection

@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <!-- RECENT PURCHASES -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Modifier le rendez-vous</h3>
                </div>  
            </div>
            <!-- END RECENT PURCHASES --> <!-- En tête -->
        </h2>
    </x-slot>

    <div class="container">
        <div class="row justify-content-md-center mt-5">        
            <form action="{{route('rdvcomcli.update', $RdvComCli->id)}}" method="POST" class="col-5">   
                @csrf    
                @method('PUT')            
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <div class="form-groupe">
                                <strong>Client :</strong>
                                <select name="client_id" class="form-select" aria-label="Default select example">
                                    <option selected>Selectionner un client</option>
                                    @foreach ($client as $unclient)
                                        @if ($unclient->id == $RdvComCli->Client->id)
                                            <option selected value="{{ $unclient->id }}">{{ $unclient->id }} - {{ $unclient->NomCli  }} {{ $unclient->PrenomCli  }}</option>  
                                        @else
                                            <option value="{{ $unclient->id }}">{{ $unclient->id }} - {{ $unclient->NomCli  }} {{ $unclient->PrenomCli  }}</option>  
                                        @endif                                         
                                    @endforeach                                         
                                  </select>
                            </div>
                    </div>
                    @if (Auth::user()->PosteEmp == 1)
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <div class="form-groupe">
                                <strong>Employé :</strong>
                                <select name="employe_id" class="form-select" aria-label="Default select example">
                                    <option selected>Selectionner un employé</option>
                                    @foreach ($emp as $unEmp)
                                        @if ($unEmp->id == $RdvComCli->Employe->id)
                                            <option selected value="{{ $unEmp->id }}">{{ $unEmp->id }} - {{ $unEmp->NomEmp  }} {{ $unEmp->PrenomEmp  }}</option>  
                                        @else
                                            <option value="{{ $unEmp->id }}">{{ $unEmp->id }} - {{ $unEmp->NomEmp  }} {{ $unEmp->PrenomEmp  }}</option>  
                                        @endif                                         
                                    @endforeach                                         
                                </select>
                            </div>
                        </div>
                    @endif
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <div class="form-groupe">
                                <strong>Date :</strong>
                                <input type="date" name="DateRdv" class="form-control" value="{{ $RdvComCli->DateRdv }}">
                            </div>
                    </div>
                    <div class="col-12">
                            <button class="btn btn-primary" type="submit">Modifier le rendez-vous</button>
                    </div>
                </div>
            </form>
        </div>  
    </div>  
</x-app-layout>
   
@endsection