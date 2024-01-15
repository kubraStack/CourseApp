<?php
    //*Session'ı başlattık ve libs dosyası içindeki dosyaları  dahil ettik.
    ///*Require ile diğer dosya içeriğini yüklemiş olduk
    require "libs/variables.php";
    require "libs/functions.php";
    session_start();


?>
<?php 
 //Formdan gelen kurs bilgilerini index'e yazdırdık
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = $_POST["title"];
        $subtitle = $_POST["subtitle"];
        $image = $_POST["image"];
        $dateAdded = $_POST["dateAdded"];

        courseAdd($courses, $title, $subtitle, $image, $dateAdded);
    }
   
?>

<?php include "partials/_header.php"; ?>
<?php include "partials/_navbar.php"; ?>
<link rel="stylesheet" href="style.css">

<div class="container">
    <div class="row">
        <div class="col-3">
            <?php include "partials/_menu.php" ?>
        </div>
        <div class="col-9">
            <?php include "partials/_title.php"; ?>

            <?php include "partials/courses.php" ?> 
        </div>
    </div>
</div>


<!-- bootstrap scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>   

<?php include "partials/_footer.php" ?>