<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Volume of paralepepid</title>
  </head>
  <body>

    <?php $lun = $_GET["length"]; ?>
    <?php $alt = $_GET["height"]; ?>
    <?php $larg = $_GET["width"]; ?>
    <?php $vol = $alt*$larg*$lun; ?>

    <h1> La lunghezza è <?php echo $lun; ?> </h1> <br>
    <h1> La altezza è <?php echo $alt; ?> </h1> <br>
    <h1> La larghezza è <?php echo $larg; ?> </h1> <br>
    <h1> Il volume è <?php echo $vol; ?> </h1> <br>



  </body>
</html>
