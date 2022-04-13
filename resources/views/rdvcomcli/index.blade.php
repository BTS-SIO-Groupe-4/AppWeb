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
                    <h3 class="panel-title">Rendez-Vous</h3>
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
                            <th>Client </th> 
                            <th>Employes</th> 
                            <th>Date</th> 
                           
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($data as $value)
                        <tr>  
                            <td>{{ $value->client->NomCli}} {{ $value->client->PrenomCli }}</td> 
                            @if (Auth::user()->PosteEmp != 0)
                                @if ($value->employe_id != "")
                                    <td>{{ $value->employe->NomEmp }} {{ $value->employe->PrenomEmp }}</td>
                                @else
                                    <td>
                                        <form action="{{route('rdvcomcli.update', $value->id)}}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <select name="employe_id" class="form-select">
                                                <option selected>Sélectionner un employé</option>                                        
                                                @foreach ($emp as $valEmp)
                                                    <option value="{{ $valEmp->id}}">{{ $valEmp->NomEmp}} {{ $valEmp->PrenomEmp}}</option>  
                                                @endforeach
                                            </select>
                                            <button type="submit" class="btn btn-primary">Ajouter commerciaux</button>
                                        </form> 
                                    </td>
                                @endif
                            @else
                                <td>{{ $value->Employe->NomEmp}} {{ $value->Employe->PrenomEmp}}</td>
                            @endif
                            
                            <td>{{ $value->DateRdv}}</td>
                            <td>
                                <form action="{{route('rdvcomcli.destroy', $value->id)}}" method="POST">
                                    
                                    <a class="btn btn-info" href="{{route('rdvcomcli.edit', $value->id)}}">Modifier</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>
                            </td>
                        </tr>    
                        @endforeach
                    </table>
                    {!! $data->links() !!}

                    <a class="btn btn-info col-1" href="{{route('rdvcomcli.create')}}">Ajouter</a>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
  