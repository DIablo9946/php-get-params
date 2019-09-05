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

    <?php echo $lun; ?>
    <?php echo $alt; ?>
    <?php echo $larg; ?>
    <?php echo $vol; ?>


  </body>
</html>
