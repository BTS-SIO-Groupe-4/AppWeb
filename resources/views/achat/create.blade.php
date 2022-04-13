@extends('..\template')
@section('title')
    Ajout achat
@endsection

@section('content')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <!-- RECENT PURCHASES -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Achat Récent</h3>
                </div>  
            </div>
            <!-- END RECENT PURCHASES --> <!-- En tête -->
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{route('achat.store')}}" method="POST" class="col-5">   
                @csrf                
                <div class="row">
                    <h1 class="text-center mb-3">Ajouter un Achat</h1>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <div class="form-groupe">
                                <strong>Numéro Achat :</strong>
                                <input type="text" name="id" class="form-control" placeholder="Entrez l'Id">
                            </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                        <div class="form-groupe">
                            <strong>Numéro Achat :</strong>
                            <input type="text" name="IdCli" class="form-control" placeholder="Entrez l'IdCli">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                        <div class="form-groupe">
                            <strong>Numéro Achat :</strong>
                            <input type="text" name="IdEmp" class="form-control" placeholder="Entrez l'IdEmp">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                        <div class="form-groupe">
                            <strong>Numéro Achat :</strong>
                            <input type="text" name="IdProd" class="form-control" placeholder="Entrez l'IdProd">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                        <div class="form-groupe">
                            <strong>Numéro Achat :</strong>
                            <input type="text" name="IdProd" class="form-control" placeholder="Entrez l'IdProd">
                        </div>
                    </div>
                    <div class="col-12">
                            <button class="btn btn-primary" type="submit">Ajouter l'Achat</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
  
