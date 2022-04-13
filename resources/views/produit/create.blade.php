@extends('..\template')

@section('title')
    Créer un produit
@endsection

@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <!-- RECENT PURCHASES -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Ajouter un produit</h3>
                </div>  
            </div>
            <!-- END RECENT PURCHASES --> <!-- En tête -->
        </h2>
    </x-slot>

    <div class="container">
        <div class="row justify-content-md-center mt-5">        
            <form action="{{route('produit.store')}}" method="POST" class="col-5">   
                @csrf                
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <div class="form-groupe">
                                <strong>Nom :</strong>
                                <input type="text" name="NomProd" class="form-control" placeholder="Entrez le nom">
                            </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <div class="form-groupe">
                                <strong>Type produit :</strong>
                                <input type="text" name="TypeProd" class="form-control" placeholder="Entrez le prénom">
                            </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <div class="form-groupe">
                                <strong>Prix :</strong>
                                <input type="number" name="PrixProd" class="form-control" placeholder="Entrez l'adresse">
                            </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <div class="form-groupe">
                                <strong>Description :</strong>
                                <input type="text" name="DescProd" class="form-control" placeholder="Entrez le code postal">
                            </div>
                    </div>
                    <div class="col-12">
                            <button class="btn btn-primary" type="submit">Ajouter le produit</button>
                    </div>
                </div>
            </form>
        </div>  
    </div>  
</x-app-layout>
   
@endsection