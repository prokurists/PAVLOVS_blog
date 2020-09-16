<!DOCTYPE html>
<html lang="lv">
<head>
  <title>Aleksejs portfolio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="resources/js/main.js"></script>
  <link rel="stylesheet" type="text/css" href="resources/style/style.css">
</head>
  <body>

      <div class="jumbotron text-center">
          <?php require __DIR__ . '/resources/jumbo.php';?>
      </div>

          <?php require __DIR__ . '/resources/navi.php';?>

      <div class="container-fluid">
          <?php require __DIR__ . '/resources/main.php';?>
      </div>

  <footer>
          <?php require __DIR__ . '/resources/footer.php';?>
  </footer>

  </body>
</html>
