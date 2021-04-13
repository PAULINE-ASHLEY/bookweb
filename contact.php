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
      <h2>Form</h2>
      <form action="#">
        <div class="form-group">
          <label for="email">Name</label>
          <input type="text" class="form-control" id="email" placeholder="Enter Your Name" name="name"
          style="border:1px solid grey">
        </div>
        <div class="form-group">
          <label for="pwd">Email</label>
          <input type="email" class="form-control" id="pwd" placeholder="Enter Your Email" name="email"
          style="border:1px solid grey">
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea class="form-control" rows="5" id="message" style="border:1px solid grey"></textarea>
        </div>
        <button type="submit" class="btn" style="background-color:black;color:white">Submit</button>
      </form>

    </div>

    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">

    </div>
  </div>
</div>
<br>

<h2 style="text-align:center">Contact Us</h2>
<div class="container">
  <div class="row">
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 text-center" style="border: 1px solid grey;padding: 20px 0 20px 0">
    <p style="color:grey">Call Us: <a href="tel:0700000000" style="color:purple;text-decoration:none" >0700000000</a></p>
    <p style="color:grey">WhatsApp Us To Order: <a href="tel:0700000000" style="color:purple;text-decoration:none" >0700000000</a></p>
    <p style="color:grey">Email: <a href="mailto:mangenybuch@gmail.com" style="color:purple;text-decoration:none" >mangenybuch@gmail.com</a></p>
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 text-center" style="border: 1px solid grey;padding: 20px 0 20px 0">
      <p>MangenyBuch</p>
      <p style="color:grey">P.O. BOX 10000</p>
      <p style="color:grey">00000 Nairobi</p>
      <p style="color:grey">Kenya</p>
    </div>
  </div>
</div>


<br><br><br><br>





    <?php include 'footer.php'; ?>
  </body>
</html>
