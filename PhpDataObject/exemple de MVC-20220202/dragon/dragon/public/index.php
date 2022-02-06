<?php
include('../controller/C_Dragon.php');
$loc = filter_input(INPUT_GET, "loc") ? filter_input(INPUT_GET, "loc") : 'home';
$inc = "";
$c_dragon = new C_Dragon();

switch ($loc) {
    case 'detail':
        $inc = "../vue/V_detail.php";
        break;

    default:
        $inc = "../vue/V_dragon.php";
        break;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php include_once($inc); ?>

</body>

</html>