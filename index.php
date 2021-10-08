<?php
session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>OCABIS - Portal</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="global.css" rel="stylesheet" />    
    </head>

    <body>
        <div class="d-flex align-items-center justify-content-center" id="form">
            <div class="card border-primary row text-center" style="width: 20rem;" id="cardLogin">
                <img src="assets/images/logo.png" class="card-img-top" style="padding: 30px;" alt="ocabis">
                <div class="card-body">
                  <h5 class="card-title">Welcome User</h5>

                  <form role="form" method="post" action="./dbcomponents/login.php">
                    <fieldset>
                      <div class="form-group">
                        <input class="form-control" style="margin-top: 10px" placeholder="Email" name="user_email" type="email" required>
                      </div>
                      <div class="form-group">
                        <input class="form-control" style="margin-top: 10px; margin-bottom: 10px" placeholder="Password" name="user_password" type="password" required>
                      </div>
                    <div class="d-grid gap-2">
                    <button class="btn btn-primary" name="user_login">Login</button>
                      <a class="btn" type="button" href="./components/registerUser.php">Register</a>
                    </div>
                    </fieldset>
                  </form>

                </div>
              </div>
        </div>
    </body>
</html>
