<?php 
    require  "libs/variables.php";
    require "libs/functions.php";
?>

<?php include "partials/_header.php"; ?>
<?php include "partials/_navbar.php"; ?>




<div class="container my-3">
    <div class="row">
        <div class="col-12">
            <form action="index.php" method="post">
                <div class="mb-3">
                    <label for="title">Header</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="subtitle">Alt Header</label>
                    <input type="text" name="subtitle" class="form-control" id="subtitle">
                </div>
                <div class="mb-3">
                    <label for="image">İmage</label>
                    <input type="text" name="image" id="image" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="dateAdded">Addition Date</label>
                    <input type="text" name="dateAdded" class="form-control" id="dateAdded">
                </div>
                <button class="btn btn-success" type="submit">Save</button>
            </form>
        </div>
    </div>
</div>


<?php include "partials/_footer.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script> 