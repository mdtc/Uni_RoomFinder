
<?php
require('../model/databaseAdm.php');
require('../model/data_db.php');
?>


<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>UniSQ Room Finder</title>
    <link rel="icon" type="image/png" width="16px" height="16px" href="../img/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
<div class="topNav">
    <a href="../index.php"><img src="../img/UniSQlogo.svg" width="150" height="60.53" alt="UniSQ"></a>
    <div class="ref">
        <!-- <a href="../modes/admin.php">Admin</a> -->
        <a href="../index.php">Home</a>
        <a target="_blank" href="https://usq.saasitau.com/">UniSQ HUB</a>

    </div>
</div>

<div class="login">
    <h2>Register New User</h2>
    <form action="" method="post" autocomplete="off">
        <label for="username">Username: </label>
        <input type="text" name="username"><br>
        <label for="pass"> Password: </label>
        <input type="password" name="pass">
        <input type="submit" name="validate" value="register">
    </form>

</div>


<?php 

$validate = filter_input(INPUT_POST, 'validate');
if ($validate == "register"){

    $username = filter_input(INPUT_POST, 'username');
    $pass = filter_input(INPUT_POST, 'pass');

    hashing($username, $pass);
}

?>





</body>

<?php include '../view/footer.php'; ?>


