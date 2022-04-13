@extends('..\template')
@section('content')
<!-- WRAPPER -->
<div id="wrapper" class="d-flex align-items-center justify-content-center">
    <div class="auth-box register">
      <div class="content">
        <div class="header">
          <p class="lead">Créer un compte</p>
        </div>
        <x-jet-validation-errors class="mb-4 text-danger" />
        <form class="form-auth-small" method="POST" action="{{ route('register') }}">
          @csrf
          <div class="form-group">
            <input name="name" type="name" class="form-control" id="name" placeholder="Nom">
          </div>
          <div class="form-group">
            <input name="firstname" type="firstname" class="form-control" id="firstname" placeholder="Prenom">
          </div>
          <div class="form-group">
            <input name="tel" type="tel" class="form-control" id="tel" placeholder="Téléphone">
          </div>
          <div class="form-group">
            <input name="email" type="email" class="form-control" id="email" placeholder="Email">
          </div>
          <div class="form-group">
            <input name="password" type="password" class="form-control" id="password" placeholder="Mot de passe">
          </div>
          <div class="form-group">
            <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" placeholder="Confirmation du mot de passe">
          </div>
          <button type="submit" class="btn btn-primary btn-lg btn-block">Validé</button>
          <div class="bottom">
            <span class="helper-text">Déjà inscrit? <a href="{{ route('login') }}">Connexion</a></span>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- END WRAPPER -->
@endsection