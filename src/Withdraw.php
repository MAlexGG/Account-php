<?php

namespace App;

require("./Account.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Deposit</title>
</head>

<body>
    <?php
    $count = new Account(1, "Alex", "Galarza", 100);
    $amount = $_REQUEST['withdraw'];

    if ($amount === '') {
    ?>
        <div class="card m-3">
            <div class="card-header">Withdraws</div>
            <div class="card-body">
                <p>Ingrese una cantidad</p>
            </div>
            <a class="btn btn-dark m-3" href="../index.php">Return</a>
        </div>

    <?php
    } else {
        $newBalance = $count->withdraw($amount);
    ?>
        <div class="card m-3">
            <div class="card-header">Withdraws</div>
            <div class="card-body">
                <p>
                    <?php {
                        echo $newBalance;
                    } ?>
                </p>
                <p>Account number:
                    <?php {
                        echo $count->getCount();
                    } ?>
                </p>
                <p>Client:
                    <?php {
                        echo "{$count->getName()} {$count->getLastname()}";
                    } ?>
                </p>
                <p>Your account has:
                    <?php {
                        echo "{$count->getBalance()} €";
                    } ?>
                </p>
            </div>
            <a class="btn btn-dark m-3" href="../index.php">Return</a>
        </div>
    <?php
    }
    ?>

</body>

</html>