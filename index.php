<!DOCTYPE html>
<html lang="lv">
<head>
  <title>Aleksejs portfolio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="resources/js/main.js"></script>
  <link rel="stylesheet" type="text/css" href="resources/style/style.css">
</head>
  <body>

      <?php require __DIR__ . '/resources/navi.php';?>

      <div class="jumbotron text-center">
          <?php require __DIR__ . '/resources/jumbo.php';?>
      </div>


      <div class="container-fluid">
          <?php require __DIR__ . '/resources/main.php';?>
      </div>

  <footer>
          <?php require __DIR__ . '/resources/footer.php';?>
  </footer>

  </body>
</html>
