@extends('..\template')

@section('title')
    Créer un achat
@endsection

@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <!-- RECENT PURCHASES -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Ajouter un un produit à l'achat numéro {{ $facture_id }}</h3>
                </div>  
            </div>
            <!-- END RECENT PURCHASES --> <!-- En tête -->
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="m-3">        
                    <form action="{{route('lignefacture.store')}}" method="POST" class="col-5">   
                        @csrf   
                        <input type="hidden" name="facture_id" value="{{ $facture_id}}">             
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <div class="form-groupe">
                                    <strong>Produit :</strong>
                                    <select name="produit_id" class="form-select" aria-label="Default select example">
                                        <option selected>Selectionner un client</option>
                                        @foreach ($produits as $unProduit)
                                            <option value="{{ $unProduit->id }}">{{ $unProduit->id }} - {{ $unProduit->NomProd  }}</option>
                                        @endforeach
                                    </select>
                                </div>
                        </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                    <div class="form-groupe">
                                        <strong>Qunatité :</strong>
                                        <input type="number" name="Qte" class="form-control" >
                                    </div>
                                    
                            </div>
                            <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Ajouter le produit a l'achat</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>  
    </div>  
</x-app-layout>
   
@endsection