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
        <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
    
        <link href="../css/bootstrap.min.css" rel="stylesheet" />
        <link href="../global.css" rel="stylesheet" />    
    </head>

    <body>
        <div class="d-flex align-items-center justify-content-center" id="form">
            <div class="card border-primary" style="width: 20rem;" id="cardLogin">
                <div class="card-body">
                  <h5 class="card-title">Sign Up</h5>
                  <form role="form" method="post" action="../dbcomponents/register.php">
                    <fieldset>
                      <div class="form-group">
                        <input class="form-control" style="margin-top: 10px" placeholder="Firstname" name="ruser_firstname" type="text" required>
                      </div>
                      <div class="form-group">
                        <input class="form-control" style="margin-top: 10px" placeholder="Lastname" name="ruser_lastname" type="text" required>
                      </div>
                      <div class="form-group">
                        <input class="form-control" style="margin-top: 10px" placeholder="Phonenumber" name="ruser_number" type="text" required>
                      </div>
                      <div class="form-group">
                        <input class="form-control" style="margin-top: 10px" placeholder="Email" name="ruser_email" type="email" required>
                      </div>
                      <div class="form-group">
                        <input class="form-control" style="margin-top: 10px; margin-bottom: 10px" placeholder="Password" name="ruser_password" type="password" required>
                      </div>
                    <div class="d-grid gap-2">
                      <button class="btn btn-primary" name="register">Register</button>
                      <a class="btn" href="../index.php" type="button">Go Back</a>
                    </div>
                    </fieldset>
                  </form>
                </div>
            </div>
        </div>
    </body>
</html>
