<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title> PHPBLOG </title>
  </head>
    <body>
       <div class="container">
       <div class="login-box">
            <div class="row">

            <div class="col-md-6 login-left">
                <h2> Login Here</h2>
                <form action="validation.php" method="POST">
                    <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" style="color:white" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" name="password" class="form-control" style="color:white" required>
                    </div>
                    <button type="submit" class="btn btn-primary">login</button>
                </form>
            </div>

            <div class="col-md-6 login-right">
                <h2> Register Here</h2>
                <form action="registration.php" method="POST">
                    <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>

            </div>
        </div>
       </div>

    </body>
</html>