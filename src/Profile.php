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
    <title>Bank Account</title>
</head>

<body class="row m-3 p-0">
    <?php
        $countNumber = $_REQUEST['count'];
        $name = $_REQUEST['name'];
        $lastname = $_REQUEST['lastname'];
        $initial = $_REQUEST['initial_deposit'];
        $count = new Account($countNumber, $name, $lastname, $initial);
    ?>
    <div class="card p-0 mb-3 bg-dark text-white">
        <div class="card-header">
            My Profile
        </div>
    </div>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Lastname</th>
        <th scope="col">Balance</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row"><?php echo $count->getCount()?></th>
        <td><?php echo $count->getName()?></td>
        <td><?php echo $count->getLastname()?></td>
        <td><?php echo $count->getBalance()?></td>
        </tr>
    </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>