@extends('..\template')

@section('content')
<!-- WRAPPER -->
<div id="wrapper" class="d-flex align-items-center justify-content-center">
    <div class="auth-box ">
      <div class="left">
        <div class="content">
          <div class="header">
            <div class="logo text-center"><img width="150" height="116" src="assets/img/Infotools.png" alt="Klorofil Logo"></div>
            <p class="lead">Connectez vous à vôtre compte</p>
          </div>
          <x-jet-validation-errors class="mb-4 text-danger" />
          <form class="form-auth-small" method="POST" action="{{ route('login') }}">
            @csrf   
            <div class="form-group">
              <label for="signin-email" class="control-label sr-only">Email</label>
              <input name="MailEmp" type="email" class="form-control" id="signin-email" placeholder="E-mail">
            </div>
            <div class="form-group">
              <label for="signin-password" class="control-label sr-only">Password</label>
              <input name="password" type="password" class="form-control" id="signin-password" placeholder="Mot de passe">
            </div>
            <div class="form-group">
              <label class="fancy-checkbox element-left custom-bgcolor-blue">
                <input type="checkbox">
                <span class="text-muted">Se souvenir de moi</span>
              </label>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">CONNEXION</button>
            <div class="bottom">
              <span class="helper-text"><i class="fa fa-lock"></i> <a href="page-forgot-password.html">Mot de passe oublié?</a></span>
            </div>
          </form>
        </div>
      </div>
      <div class="right">
        <div class="overlay"></div>
        <div class="content text">
          <h1 class="heading">InfoTools</h1>
          <p>par Matthieu, Paul, Jeffrey, Marc-Antoine</p>
        </div>
      </div>
    </div>
  </div>
  <!-- END WRAPPER -->  
@endsection

