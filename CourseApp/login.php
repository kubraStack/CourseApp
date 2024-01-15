<?php 

    require "libs/variables.php";
    require "libs/functions.php";

    session_start();


    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        //*$_SESSION süper global değişkeni, oturum verilerine erişim sağlar.
    
        if($username == db_user["username"] && $password == db_user["password"]){
            //Eğer girilen bilgiler ile db_user içindeki bilgiler doğru ise setcookie ile  Cookie'deki auth[username]ve auth[name] prop'una 1 gün göndermiş olduk
            setcookie("auth[username]", db_user["username"], time() + (60*60*24));
            setcookie("auth[name]", db_user["name"], time() + (60*60*24));
            //$_SESSION içindeki message oturumuna gönderceğimiz mesajı atadık.
            $_SESSION["message"] = $username." logged into the account with ";
            header("Location: index.php");
        }else{
            echo "<div class='alert alert-danger mb-0 text-center'>Upps, Wrong Username or Wrong Password!</div>";
        }
    }


?>


<?php include "partials/_header.php"; ?>
<?php include "partials/_navbar.php"; ?>

<style>
    .border{
        padding: 1rem;
    }
</style>

<div class="container my-3">
    <div class="row">
        <div class="col-12">
            <form action="login.php" method="post">
                <div class="mb-3">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" value="">
                    <div class="text-danger">

                    </div>
                </div>
                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                    <div class="text-danger">

                    </div>
                </div>

                <button class="btn btn-primary" type="submit" name="login">Login</button>
            </form>
        </div>
    </div>
</div>

<?php include "partials/_footer.php"; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script> 