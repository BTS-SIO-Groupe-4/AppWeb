@extends('..\template')

@section('title')
    Achats 
@endsection

@section('content')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <!-- RECENT PURCHASES -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Liste des produits de l'achat de {{ $facture->Client->NomCli}} {{ $facture->Client->PrenomCli}} du {{ $facture->DateFac}}</h3>
                </div>  
            </div>
            <!-- END RECENT PURCHASES --> <!-- En tête -->
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ($message = Session::get('success'))
            <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
                <div>
                {{$message}}
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>  
            @endif
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"">
                <div class="m-3"> 
                    <table class="table table-bordered "> 
                        <tr>    
                            <th>Produit</th>
                            <th>Quantité</th> 
                           
                            <th width="80px">Action</th>
                        </tr>
                        @foreach ($detailfact as $key => $value)
                        <tr>    
                            <td>{{ $value->Produit->id}} - {{ $value->Produit->NomProd}}</td>
                            <td>{{ $value->Qte}}</td>                            
                            <td>
                                <form action="{{route('lignefacture.destroy', $value->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>
                            </td>
                        </tr>            
                        @endforeach
                    </table>
                    {!! $detailfact->links() !!}
                    <a class="btn btn-info col-1" href="{{ url('/lignefacture/create?facture='.$facture->id)}}">Ajouter</a>  
                </div>           
                
            </div>
        </div>
    </div>
</x-app-layout>
  