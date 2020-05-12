<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrasi</title>
    <link rel="stylesheet" href="/css/app.css" type="text/css">
  </head>
  <body>
    <div class="container">
      <span id="vbio"><p>Registration Form</p></span>
      <span id="vl"><legend>Please fill in the form below</legend></span>
      <form class="vform box" action="index.php" method="post">
        <label>First Name*</label>
        <input type="text" name="ffirst" required>
        <label>Last Name</label>
        <input type="text" name="flast" ><br>

        <label>Provinsi</label>
        <input type="text" name="fprov" required><br>

        <label>Alamat</label>
        <input type="text" size="50" name="falamat" required><br>

        <label>Kota</label>
        <input type="text" name="fkota" required><br>
      </form>
    </div>
  </body>
</html>
