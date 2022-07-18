<?php



  




?>








<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>


    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

          <form method="post" class="sign-up-form">
            <h2 class="title">I miei dati</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>here
              <input name="nomeazienda" type="text" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input name="referente" type="text" placeholder="Referente" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input name="emailaziendale" required type="email" placeholder="Email Aziendale" />
            </div>
            <div class="input-field">
            <i class="fas fa-phone"></i>
              <input name="telefono" type="text" placeholder="Numero Telefono" />
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
              <input name="indirizzosede" type="text" placeholder="Indirizzo Sede Operativa" />
            </div>
            <div class="input-field">
              <i class="fas fa-tag"></i>
              <input name="indirizzolegale" type="text" placeholder="Indirizzo Sede Legale" />
            </div>


            <input type="submit" name="savedata" class="btn" value="Save your data" />


          </form>
          <a href="login.php">
        <input type="submit" name="logout" class="btn" value="Logout" />
        </a>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">

          <div class="content">

            <h3>Vogliamo saperne di più</h3>
            <p>
              I tuoi dati sono al sicuro con noi. Privacy first!

            </p>
            <button class="btn transparent" id="sign-up-btn">
              Check your data
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>

      </div>
    </div>

    <script src="app.js"></script>







</body>

</html>