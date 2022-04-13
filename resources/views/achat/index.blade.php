@extends('..\template')



@section('title')
    Achat
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
           
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <table class="table table-bordered"> 
                    <tr>   
                        <th>ID</th> 
                        <th>ID Client</th> 
                        <th>ID Employés</th> 
                        <th>ID Production</th> 
                        <th>Quantité</th> 
                       
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($data as $key => $value)
                    <tr>    
                        <td>{{ $value->id}}</td>
                        <td>{{ $value->IdCli}}</td>
                        <td>{{ $value->IdEmp}}</td>
                        <td>{{ $value->IdProd}}</td>
                        <td>{{ $value->Qte}}</td>
                        
                        <td>
                            <form action="{{route('achat.destroy', $value->id)}}" method="POST">
                                
                                <a class="btn btn-info" href="{{route('achat.edit', $value->id)}}">Modifier</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>            
                    @endforeach
                </table>
                {!! $data->links() !!}
                <x-jet-welcome />
            </div>
        </div><a class="btn btn-info col-1" href="{{url('/achat/create')}}">Ajouter</a>
    </div>

    
    
</x-app-layout>
  