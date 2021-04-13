<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php include 'nav.php'; ?>


        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">

            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
              <br>
              <h2>Sign Up</h2>
              <form action="#">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email"
                  style="border: 1px solid grey">
                </div>
                <div class="form-group">
                  <label for="pwd">Password</label>
                  <input type="password" class="form-control" id="pwd" placeholder="Enter Your Password" name="password"
                  style="border: 1px solid grey">
                </div>
                <button type="submit" class="btn" style="background-color:black;color:white">Register</button>
              </form>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">

            </div>
          </div>
        </div>

    <br><br><br><br><br>

    <?php include 'footer.php'; ?>
  </body>
</html>
