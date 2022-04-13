@extends('..\template')

@section('title')
    Créer un client
@endsection

@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <!-- RECENT PURCHASES -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Ajouter un client</h3>
                </div>  
            </div>
            <!-- END RECENT PURCHASES --> <!-- En tête -->
        </h2>
    </x-slot>

    <div class="container">
        <div class="row justify-content-md-center mt-5">        
            <form action="{{route('client.store')}}" method="POST" class="col-5">   
                @csrf                
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <div class="form-groupe">
                                <strong>Nom :</strong>
                                <input type="text" name="NomCli" class="form-control" placeholder="Entrez le nom">
                            </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <div class="form-groupe">
                                <strong>Prénom :</strong>
                                <input type="text" name="PrenomCli" class="form-control" placeholder="Entrez le prénom">
                            </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <div class="form-groupe">
                                <strong>Adresse :</strong>
                                <input type="text" name="AdresseCli" class="form-control" placeholder="Entrez l'adresse">
                            </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <div class="form-groupe">
                                <strong>Ville :</strong>
                                <input type="text" name="VilleCli" class="form-control" placeholder="Entrez le code postal">
                            </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <div class="form-groupe">
                                <strong>Email :</strong>
                                <input type="email" name="MailCli" class="form-control" placeholder="Entrez l'email">
                            </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <div class="form-groupe">
                                <strong>Téléphone :</strong>
                                <input type="tel" name="NumCli" class="form-control" placeholder="Entrez le numéro de téléphone">
                            </div>
                    </div>
                    <div class="col-12">
                            <button class="btn btn-primary" type="submit">Ajouter le client</button>
                    </div>
                </div>
            </form>
        </div>  
    </div>  
</x-app-layout>
   
@endsection