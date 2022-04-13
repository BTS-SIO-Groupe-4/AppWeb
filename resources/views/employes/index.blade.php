@extends('..\template')



@section('title')
    Employes
@endsection

@section('content')


        <x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Employés</h3>
                        </div>  
                    </div>
                </h2>
            </x-slot>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="m-3">
                            <table class="table table-bordered"> 
                                <tr>   
                                    <th>Nom </th> 
                                    <th>Prénom</th> 
                                    <th>Téléphone</th> 
                                    <th>Mail</th> 
                                    <th>Poste</th> 
                                   
                                    <th width="180px">Action</th>
                                </tr>
                                @foreach ($data as $key => $value)
                                <tr>    
                                    <td>{{ $value->NomEmp}}</td>
                                    <td>{{ $value->PrenomEmp}}</td>
                                    <td>{{ $value->TelEmp}}</td>
                                    <td>{{ $value->MailEmp}}</td>
                                    
                                    <td>@if ($value->PosteEmp == 0)
                                        Employes
                                        @else
                                        Responsable
                                        @endif
                                    </td>
                                    
                                    <td>
                                        <form action="{{route('employes.destroy', $value->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>            
                                @endforeach
                            </table>
                            {!! $data->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </x-app-layout>
    

