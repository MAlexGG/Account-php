<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Bank Account</title>
</head>
<body class="row m-3 p-0">
    <div class="card p-0 mb-3 bg-dark text-white">
        <div class="card-header">
            MY BANK
        </div>
    </div>
    <div class="col-12 p-0 mb-3">
        <form class="card" action="./src/index.php" method="POST">
            <div class="card-header">Create an Account</div>  
            <div class="card-body">
                <label class="form-label" for="count">Number Count:</label>
                <input class="form-control" name="count" type="number" placeholder="Write your number count...">
            </div>
            <div class="card-body">
                <label class="form-label" for="name">Name:</label>
                <input class="form-control" name="name" type="text" placeholder="Write your name...">
            </div>
            <div class="card-body">
                <label class="form-label" for="lastname">Lastname:</label>
                <input class="form-control" name="lastname" type="text" placeholder="Write your lastname...">
            </div>
            <div class="card-body">
                <label class="form-label" for="initial_deposit">Initial deposit:</label>
                <input class="form-control" name="initial_deposit" type="number" placeholder="How much do you want to deposit?">
            </div>
            <button class="btn btn-dark m-3" type="submit">Create Account</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>