<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if (Auth::user()->PosteEmp == 0)
                    <!--Commerciaux-->
                    <script>window.location = "/rdvcomcli";</script>
                @else
                    <!--Responsable-->                    
                    <div id="wrapper" class="d-flex align-items-center justify-content-center m-3">
                        <div class="auth-box register">
                          <div class="content">
                            <div class="header">
                              <p class="lead">Créer un compte commercial</p>
                            </div>
                            <x-jet-validation-errors class="mb-4 text-danger" />
                            <form class="form-auth-small" method="POST" action="{{ route('employes.store') }}">
                              @csrf
                              <div class="form-group">
                                <input name="NomEmp" type="text" class="form-control" id="NomEmp" placeholder="Nom">
                              </div>
                              <div class="form-group">
                                <input name="PrenomEmp" type="text" class="form-control" id="PrenomEmp" placeholder="Prenom">
                              </div>
                              <div class="form-group">
                                <input name="TelEmp" type="tel" class="form-control" id="TelEmp" placeholder="Téléphone">
                              </div>
                              <div class="form-group">
                                <input name="MailEmp" type="email" class="form-control" id="MailEmp" placeholder="Email">
                              </div>
                              <div class="form-group">
                                <input name="MdpEmp" type="password" class="form-control" id="MdpEmp" placeholder="Mot de passe">
                              </div>
                              <div class="form-group">
                                <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" placeholder="Confirmation du mot de passe">
                              </div>
                              <button type="submit" class="btn btn-primary btn-lg btn-block">Validé</button>
                            </form>
                          </div>
                        </div>
                      </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
