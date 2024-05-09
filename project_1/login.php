<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login Form</title>
</head>
<?php

if (isset($_POST['submit'])) {     //memastikan apakah sudah tersubmit atau belum
    require_once 'dbkoneksi.php';

    $user = $dbh->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $user->execute([
        $_POST['email'], $_POST['password']
    ]);

    $count = $user->rowCount(); //memastikan apakah user tersedia

    //cek dengan if else untuk mencocokan data
    if($count > 0) {
        session_start();

        $_SESSION['user'] = $user->fetch();
        header("location:index.php");
        // echo "<script>window.location='index.php'</script>";  // opsi lain
    } else {
        header("location:login.php");
        // echo "<script>window.location='login.php'</script>";
    }
}
?>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Times New Roman', Times, serif;
        background-color: #BAA8D6;
        padding: 10px;
        align-items: center;
        display: flex;
        justify-content:center;
    }
    .wrapper {
        max-width: 400px;
        margin: 20px auto;
        padding: 100px;
        padding-top:30px;
        border: 1px solid #795CAA;
        border-radius: 8px;
        background-color: #795CAA;
        box-shadow: 0 4px 8px  #3a3939;
        max-height: 500px
    }
    p {
        text-align: center;
    }
    form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    label {
        margin-bottom: 5px;
    }
    input {
        padding: 8px;
        margin-buttom:15px;
        border: 1px solid;
        border-radius:5px;
    }
    button:hover {
        background-color: #BAA8D6;
    }
    button {
        font-family: 'Times New Roman', Times, serif;
        border: 1px solid;
        border-radius:5px;
        padding: 10px;
        font-size: 15px;
        padding-right: 100px;
        padding-left: 100px;
    }
    .opsion > a {
        text-decoration: none;
        color: black;
    }
    .opsion > a:hover {
        color: blue;
    }

/* responsive */
@media only screen and (max-width: 600px) {
    .wrapper {
        padding: 20px;
    }
    form {
        width: 100%;
    }
    input, button {
        width: 100%;
        box-sizing: border-box;
    }
}

    </style>
<body>
    <div class="wrapper">
        <h1 style="text-align:center;">Login</h1>
        <p>Sign in to start your session</p>
        <form action="" method="POST">
            <div>
                <label for="" >Email</label>
                <input type="email" name="email" require  placeholder="example@gmail.com">
            </div>
            <br>
            <div>
                <label for="">Password</label>
                <input type="password" name="password" require placeholder="******">
            </div>
            <br>
            <div>
                <label for="chackbox">
                    <input type="checkbox" name="checkbox">Remember Me
                </label>
            </div>
            <br>
            <div>
               <button type="submit" name="submit">Sign In</button>
            </div>
            <br>
            <div>
               <button type="submit" name="submit">Sign Up</button>
            </div>
            <br>
            <div class="opsion">
                <a href="#"><p>I forgot my password</p></a>
                <a href="#"><p>Register a new membership</p></a>

            </div>



        </form>
    </div>
</body>
</html>