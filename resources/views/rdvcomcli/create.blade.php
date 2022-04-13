@extends('..\template')

@section('title')
    Créer un rendez-vous
@endsection

@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <!-- RECENT PURCHASES -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Ajouter un rendez-vous</h3>
                </div>  
            </div>
            <!-- END RECENT PURCHASES --> <!-- En tête -->
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="m-3">        
                    <form action="{{route('rdvcomcli.store')}}" method="POST" class="col-5">   
                        @csrf                
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                    <div class="form-groupe">
                                        <strong>Client :</strong>
                                        <select name="client_id" class="form-select" aria-label="Default select example">
                                            <option selected>Selectionner un client</option>
                                            @foreach ($client as $unclient)
                                                <option value="{{ $unclient->id }}">{{ $unclient->id }} - {{ $unclient->NomCli  }} {{ $unclient->PrenomCli  }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                    <div class="form-groupe">
                                        <strong>Date :</strong>
                                        <input type="date" name="DateRdv" class="form-control" >
                                    </div>
                            </div>
                            <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Ajouter le rendez-vous</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>  
    </div>  
</x-app-layout>
   
@endsection