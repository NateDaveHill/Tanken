<?php
session_start();

if (!isset($_SESSION['totalPrice'])) {
  $_SESSION['totalPrice'] = 0;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $gasAmount = isset($_POST['gasAmount']) ? (float)$_POST['gasAmount'] : 0;
  $gasPrice = isset($_POST['gasPrice']) ? (float)$_POST['gasPrice'] : 0;
  $newResult = $gasAmount * $gasPrice;

  $_SESSION['totalPrice'] += $newResult;
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

<body>
  <main>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <div class="container overflow-hidden text-center center">
        <div class="center">
          <input type="number" class="form-control" name="gasAmount" min="0" placeholder="Amount">
        </div>
        <div class="center">
          <input type="" class="form-control" name="gasPrice" step="0.01" min="0" placeholder="Current Gas Price">
        </div>
        <div class="center">
          <button type="submit" class="btn btn-primary btn-lg btn-success">Calculate</button>
        </div>
        <div class="center">
          <h3>You have to pay: <?php echo htmlspecialchars($totalPrice); ?> Euros.</h3>
        </div>
      </div>
    </form>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>