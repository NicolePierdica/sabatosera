<?php
require_once 'includes/library.php';
$app = new AppLib();
if (isset($_POST['register'])) {

  $username = htmlspecialchars($_POST['username']);
  $email = htmlspecialchars($_POST['email']);
  $password = htmlspecialchars($_POST['password']);
  $confirmpass = htmlspecialchars($_POST['confirm_password']);
  $nomeazienda = htmlspecialchars($_POST['nomeazienda']);
  $referente = htmlspecialchars($_POST['referente']);
  $emailaziendale = htmlspecialchars($_POST['emailaziendale']);
  $telefono = htmlspecialchars($_POST['telefono']);
  $sector = htmlspecialchars($_POST['settore']);
  $partitaiva = htmlspecialchars($_POST['partitaiva']);
  $codicefiscale = htmlspecialchars($_POST['codicefiscale']);
  $indirizzosedeoperativa = htmlspecialchars($_POST['indirizzosede']);
  $indirizzosedelegale = htmlspecialchars($_POST['indirizzolegale']);

  if ($password == $confirmpass) {
    $app->Register($username, $email, $password, $nomeazienda, $referente, $emailaziendale, $telefono, $sector, $partitaiva, $codicefiscale, $indirizzosedeoperativa, $indirizzosedelegale);
  } else {
    echo "<script>alert('your passwords does not match')</script>";
  }
} elseif (isset($_POST['login'])) {
  $username = htmlspecialchars($_POST['username']);
  $password = htmlspecialchars($_POST['password']);
  $app->Login($username, $password);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css" />
  <title>Sign in & Sign up Form</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form method="post" class="sign-in-form">
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input name="username" type="text" placeholder="Username" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input name="password" type="password" placeholder="Password" />
          </div>
          <input type="submit" name="login" value="Login" class="btn solid" />
          <p class="social-text">Or Sign in with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>

        <form method="post" class="sign-up-form">
          <h2 class="title">Sign up</h2>

          <div class="input-field">
            <i class="fas fa-user"></i>
            <input required name="username" type="text" placeholder="Username" />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input required name="email" required type="email" placeholder="Email" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input name="password" required type="password" placeholder="Password" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input name="confirm_password" required type="password" placeholder="Confirm Password" />
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input required name="nomeazienda" type="text" placeholder="Nome Azienda" />
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input name="referente" type="text" placeholder="Referente" />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input required name="emailaziendale" required type="email" placeholder="Email Aziendale" />
          </div>
          <div class="input-field">
            <i class="fas fa-phone"></i>
            <input required name="telefono" type="text" placeholder="Numero Telefono" />
          </div>
          <div class="input-field">
            <i class="fas fa-briefcase"></i>
            <input name="settore" type="text" placeholder="Settore" />
          </div>
          <div class="input-field">
            <i class="fas fa-pen"></i>
            <input name="partitaiva" type="text" placeholder="Partita Iva" />
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input name="codicefiscale" type="text" placeholder="Codice Fiscale" />
          </div>
          <div class="input-field">
            <i class="fas fa-address-card"></i>
            <input required name="indirizzosede" type="text" placeholder="Indirizzo Sede Operativa" />
          </div>
          <div class="input-field">
            <i class="fas fa-tag"></i>
            <input name="indirizzolegale" type="text" placeholder="Indirizzo Sede Legale" />
          </div>

          <input type="submit" name="register" class="btn" value="Sign up" />
          <p class="social-text">Or Sign up with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Nuovo utente?</h3>
          <p>
            Entra a far parte della nostra community di professionisti. Iscriviti subito!
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Sign up
          </button>
        </div>
        <img src="img/log.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>Uno di noi?</h3>
          <p>

          </p>
          <a href="checkdata.php">
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
          </a>
        </div>
        <img src="img/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="app.js"></script>
</body>

</html>