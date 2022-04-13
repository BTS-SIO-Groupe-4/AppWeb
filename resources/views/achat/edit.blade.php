@extends('..\template')

@section('title')
    Modifier un achat
@endsection

@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{route('achat.update', $achat->id)}}" method="POST" class="col-5">   
                    @csrf     
                    @method('PUT')    
    
                    <div class="row">
                        <h1 class="text-center mb-3">Modifier {{$achat->id}} {{$achat->IdCli}}</h1>
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-groupe">
                                    <strong>Id Cli :</strong>
                                    <input type="text" value="{{ $achat->IdCli }}" name="IdCli" class="form-control" placeholder="Entrez l'Id Client">
                                </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-groupe">
                                    <strong>Id Emp :</strong>
                                    <input type="text" value="{{ $achat->IdEmp }}" name="IdEmp" class="form-control" placeholder="Entrez l'Id Employé">
                                </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-groupe">
                                    <strong>Id Prod :</strong>
                                    <input type="text" value="{{ $achat->IdProd }}" name="IdProd" class="form-control" placeholder="Entrez l'Id Production">
                                </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-groupe">
                                    <strong>Quantité:</strong>
                                    <input type="text" value="{{ $achat->Qte }}" name="Qte" class="form-control" placeholder="Entrez la Quantité">
                                </div>
                        </div>
                       
                        <div class="col-12">
                                <button class="btn btn-primary" type="submit">Mofifier le achat</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>



    
@endsection