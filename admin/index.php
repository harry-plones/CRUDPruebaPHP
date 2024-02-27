<?php
if($_POST) {
  header('location:home.php');
}
?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <br><br><br>
        <div class="card">
          <div class="card-header">
            <h5>Login</h5>
          </div>

          <div class="card-body">
            <form method="POST">
              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="txtUser" placeholder="Enter Username">
              </div>

              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="txtPass" placeholder="Password">
              </div>

              <button type="submit" class="btn btn-primary">Sign In</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>