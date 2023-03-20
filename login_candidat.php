<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Login</title>
 <link rel="stylesheet" href="login_candidat.css">
 <style>
    .error {
    background: #F2DEDE;
    color: #A94442;
    padding: 10px;
    width: 95%;
    border-radius: 5px;
    height : 10px;
    margin-bottom : -8px;
}



input[type="email"].form-control,
input[type="password"].form-control {
    font-size: 16px;
    outline: none;
    width: calc(100% - 36px);
    border: 2px solid #CCC;
    padding: 16px;
    border-radius: 2px;
    transition: all 0.3s ease;
    border-radius: 10px;
}

input[type="email"].form-control:hover,
input[type="password"].form-control:hover {
    border: 2px solid #CCC;
}

input[type="email"].form-control:focus,
input[type="password"].form-control:focus {
    border: 2px solid #CCC;
}

input[type="email"].form-control:active,
input[type="password"].form-control:active {
    border: 2px solid #CCC;
}

</style>
</head>

<body>


    <div class="container">
        <div class="login-box">
            <div class="user-icon"><img style="height: 140px; " src="logo_vert-removebg-preview.png" alt="logo">
                <i class="far fa-user"></i>
            </div>
            <h2 style="text-align: center;">Espace candidat</h2>
            <?php if(isset($_GET['error'])){ ?> 
        <p class="error"><?php echo $_GET['error']; ?></p>
       <?php  } ?>
        </br>
            <form id="form" action="ligin.php" method="post">
                <div class="form-group">
                    <input type="email" name="uname"  placeholder="email" id="username" class="form-control"  required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" id="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="rememberme">
                    <input type="checkbox" name="rememberme" id="rememberme" >Remember Password
                    </label>
                </div>
                <div class="form-group">
                     <button id="btn" onclick="verifier()" type="submit" class="full-btn">Login</button>
                </div>
 <div class="form-group">
 <p>Not Registered? <a href="signup_candidat.php">Sign Up</a></p>
 </div>
 </form>



 </div>
 </div>
<script src="erreur.js"></script>

</body>
</html>

