<?php
    define('TITLE', 'Registro');
    include_once('../includes/dbh.php');
    include('../includes/header.php');
    include('../includes/navBar.php');
?>
<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading text-center">Creación de perfil</h3>
                <!-- Default form register -->
                <form class="text-center border border-light p-5" action="#!">

                    <div class="form-row mb-4">
                        <div class="col input-round">
                            <!-- First name -->
                            <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Nombres">
                        </div>
                        <div class="col input-round">
                            <!-- Last name -->
                            <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Apellidos">
                        </div>
                    </div>
                    
                    <div class="input-round">
                        <!-- E-mail -->
                        <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">

                        <!-- Password -->
                        <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Contraseña" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                        <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                            Al menos 8 caracteres
                        </small>
                    </div>
                    
                    <!-- Sign up button -->
                    <button class="btn btn-dark my-4 btn-block button-round" type="submit">Sign in</button>
                </form>
                <!-- Default form register -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
    include('../includes/footer.php');
?> 
