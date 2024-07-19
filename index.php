<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLR+Jp6b7U5l5Xl5b7l5XZl5l5XZl5P3R5l5b7P3R5" crossorigin="anonymous"></script>
  <title>Tanken</title>
</head>

<body>
  <main>
    <form method="POST" action="process_input.php">
      <div class="container overflow-hidden text-center">
        <div class="row gy-5">
          <div class="col-6">
            <div class="p-3">
              <input type="number" class="form-control" id="gasAmount" name="gasAmount" placeholder="You Will See The Gas Amount Here.">
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="p-3">
            <input type="number" class="form-control" id="gasPrice" name="gasPrice" placeholder="You Will See The Gas Price Here.">
          </div>
        </div>
        <div class="col-6">
          <div class="p-3">
            <input type="number" class="form-control" id="totalPrice" name="totalPrice" placeholder="You Will See The Total Price Here." readonly></input>
          </div>
        </div>
        <div class="col-6">
          <div class="p-3">
            <button type="submit" id="calcBtn" class="btn btn-primary btn-lg btn-success">Calculate</button>
          </div>
        </div>
      </div>
    </form>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>