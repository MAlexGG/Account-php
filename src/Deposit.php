<?php

namespace App;
require_once("./Account.php");

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

<body class="row m-3 p-0">
    <?php
    $countnumber = $_GET['countnumber'];
    $name = $_GET['name'];
    $lastname = $_GET['lastname'];
    $balance = $_GET['balance'];
    $count = new Account($countnumber, $name, $lastname, $balance);
    $amount = $_REQUEST['deposit'];
    ?>
    <div class="card p-0 mb-3 bg-dark text-white">
        <div class="card-header">
            My Balance
        </div>
    </div>

    <?php
    if ($amount === '') {
    ?>
        <div class="card p-0">
            <div class="card-header">Deposits</div>
            <div class="card-body">
                <p>Please enter an amount</p>
            </div>
            <a class="btn btn-dark m-3" href="../index.php">Logout</a>
        </div>

    <?php
    } else {
        $count->deposit($amount);
    ?>
        <div class="card p-0">
            <div class="card-header">Deposits</div>
            <div class="card-body">
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
            <a class="btn btn-dark m-3" href="../index.php">Logout</a>
        </div>
    <?php
    }
    ?>

</body>

</html>