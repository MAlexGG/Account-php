<?php

namespace App; 
include('./Profile.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Bank Account</title>
</head>

<body class="row m-3 p-0">

    <?php 
        $countNumber = $count->getCount();
        $name = $count->getName();
        $lastname = $count->getLastname();
        $balance = $count->getBalance();
    ?>
    
    <div class="col-sm-12 col-md-5 p-0 mb-3">
        <form class="card" action="./Deposit.php?countnumber=<?php echo $countNumber ?>&name=<?php echo $name ?>&lastname=<?php echo $lastname ?>&balance=<?php echo $balance ?>" method="POST">
            
            <div class="card-header">Deposits</div>
            <div class="card-body">
                <label class="form-label" for="deposit">How much do you want to deposit?</label>
                <input class="form-control" type="text" name="deposit" placeholder="Enter your deposit...">
            </div>
            <button class="btn btn-dark m-3" type="submit">Deposit</button>
        </form>
    </div>
    <div class="col-sm-12 col-md-5 p-0 ms-md-3">
        <form class="card" action="./Withdraw.php?countnumber=<?php echo $countNumber ?>&name=<?php echo $name ?>&lastname=<?php echo $lastname ?>&balance=<?php echo $balance ?>" method="POST">
            <div class="card-header">Withdraws</div>
            <div class="card-body">
                <label class="form-label" for="withdraw">How much do you want to withdraw?</label>
                <input class="form-control" type="text" name="withdraw" placeholder="How much you want to withdraw...">
            </div>
            <button class="btn btn-dark m-3" type="submit">Withdraw</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>