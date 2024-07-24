<?php
session_start();

if (!isset($_SESSION['totalPrice'])) {
  $_SESSION['totalPrice'] = 0;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['calculate'])) {
    $gasAmount = isset($_POST['gasAmount']) ? (float)$_POST['gasAmount'] : 0;
    $gasPrice = isset($_POST['gasPrice']) ? (float)$_POST['gasPrice'] : 0;
    $newResult = $gasAmount * $gasPrice;

    $_SESSION['totalPrice'] += $newResult;
  } elseif (isset($_POST['reset'])) {
    $_SESSION['totalPrice'] = 0;
  }
}

$totalPrice = isset($_SESSION['totalPrice']) ? $_SESSION['totalPrice'] : 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLR+Jp6b7U5l5Xl5b7l5XZl5l5XZl5P3R5l5b7P3R5" crossorigin="anonymous"></script>
  <title>Tanken</title>
</head>

<body class="custom-bg">
  <main>
    <form method="POST" action="">
      <h1 class="center my-5">Gas up here!</h1>
      <div class="container">
        <div class=" row justify-content-md-center center my-3">
          <div class="col-sm-auto">
            <input type="number" class="form-control" name="gasAmount" min="0" placeholder="Amount">
          </div>
        </div>
        <div class="row justify-content-md-center center my-3">
          <div class="col-sm-auto">
            <input type="" class="form-control" name="gasPrice" step="0.01" min="0" placeholder="Current Gas Price">
          </div>
        </div>
        <div class="row justify-content-md-center center my-3">
          <div class="col-sm-auto">
            <button type="submit" name="calculate" class="btn btn-primary btn-lg btn-warning">Calculate</button>
          </div>
        </div>
        <div class="row justify-content-md-center center my-3">
          <div class="col-sm-auto">
            <button type="submit" name="reset" class="btn btn-primary btn-lg btn-danger">Rest</button>
          </div>
        </div>
        <div class="row justify-content-md-center center my-3">
          <div class="col-sm-auto">
            <h3>You have to pay: <?php echo htmlspecialchars($totalPrice); ?> Euros.</h3>
          </div>
        </div>
      </div>
    </form>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>