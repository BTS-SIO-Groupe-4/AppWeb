@extends('..\template')



@section('title')
    Client
@endsection

@section('content')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <!-- RECENT PURCHASES -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Client Récent</h3>
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
                            <th>Nom</th> 
                            <th>Prenom</th> 
                            <th>Mail</th> 
                            <th>Adresse</th>
                            <th>Prospect</th> 
                           
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($data as $key => $value)
                        <tr> 
                            <td>{{ $value->NomCli}}</td>
                            <td>{{ $value->PrenomCli}}</td>
                            <td>{{ $value->MailCli}}</td>
                            <td>{{ $value->VilleCli}} {{ $value->AdresseCli}}</td>
                            <td>
                                @if ($value->Prospect == 1)
                                    Oui
                                @else
                                    Non
                                @endif
                            </td>
                            <td>
                                <form action="{{route('client.destroy', $value->id)}}" method="POST">
                                    
                                    <a class="btn btn-info" href="{{route('client.edit', $value->id)}}">Modifier</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>
                            </td>
                        </tr>            
                        @endforeach
                    </table>
                    {!! $data->links() !!}

                    <a class="btn btn-info col-1" href="{{url('/client/create')}}">Ajouter</a>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
  