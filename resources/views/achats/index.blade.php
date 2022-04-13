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
                    <h3 class="panel-title">Achats</h3>
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
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="m-3">   
                    <table class="table table-bordered "> 
                        <tr>    
                            <th>Client</th>
                            <th>Date achat</th> 
                           
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($data as $key => $value)
                        <tr>    
                            <td>{{ $value->Client->id}} - {{ $value->Client->NomCli}} {{ $value->Client->PrenomCli}}</td>
                            <td>{{ $value->DateFac}}</td>                            
                            <td>
                                <form action="{{route('achats.destroy', $value->id)}}" method="POST">
                                    <a class="btn btn-primary" href="{{route('achats.show', $value->id)}}">Détails</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>
                            </td>
                        </tr>            
                        @endforeach
                    </table>
                    {!! $data->links() !!}
                    <a class="btn btn-info col-1" href="{{route('achats.create')}}">Ajouter</a>
                </div>
                
                
            </div>
        </div>
    </div>
</x-app-layout>
  