<?php 
    require "libs/variables.php";
    require "libs/functions.php";
?>

<?php include "partials/_header.php"; ?>
<?php include "partials/_navbar.php"; ?>

<?php 
    //*Burada hata mesajlarını ve değişkenleri boşa çekiyoruz ki form'a her bilgi girişinde boş olsun
    $usernameErr = $emailErr = $passwordErr = $repasswordErr = $cityErr = $hobbiesErr = "";
    $username = $email = $password = $repassword = $city = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["username"])) {
            $usernameErr = ucfirst("username required field");
        }else {
            $username = safe_Html($_POST["username"]);
        }
    
        if (empty($_POST["email"])) {
            $emailErr = ucfirst("email required field");
        }else {
            $email = safe_Html($_POST["email"]);
        }
    
        if (empty($_POST["password"])) {
            $passwordErr =  ucfirst("password required field");
        }else {
            $password = safe_Html($_POST["password"]);
        }
    
        //Girilen ilk password ile ikinci defa girilen password karşılaştırmasını yaptık
        if ($_POST["password"] != $_POST["repassword"]) {
            $repasswordErr = ucfirst("password repeat field does not match");
        }else {
            $repassword = safe_Html($_POST["repassword"]);
        }
    
        //city için seçim yapılmama durumu
        if ($_POST["city"] == -1) {
            $cityErr = ucfirst("choose a city");
        }else {
            $city = $_POST["city"];
        }
    
        if (!isset($_POST["hobbies"])) {
            $hobbiesErr = ucfirst("choose a hobbies");
        }else{
            $hobbies = $_POST["hobbies"];
        }

        echo "<div class='alert alert-success text-center'>
            Registration Successful
        </div>";
    }

   

    //sayfa yenilendiğinde seçili şehri korumak için 
    $selectedCity = isset($_POST["city"]) ? $_POST["city"] : '' ;
    //kullanıcının seçtiği hobileri tutmak için bir değişken tanımladık
    $selectedHobbies = isset($_POST["hobbies"]) ? $_POST["hobbies"] : array(); 
?>


<div class="container my-3">
    <div class="row">
        <div class="col-12">
            <form action="register.php" method="post">
                <div class="mb-3">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" value="<?php echo $username;?>">
                    <div class="text-danger">
                        <?php echo $usernameErr; ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control" value="<?php echo $email; ?>" >
                    <div class="text-danger">
                        <?php echo $emailErr; ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" >
                    <div class="text-danger">
                        <?php echo $passwordErr; ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="repassword">Password Again</label>
                    <input type="password" name="repassword" id="repassword" class="form-control">
                    <div class="text-danger">
                        <?php echo $repasswordErr; ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="city">City</label>
                    <select name="city" class="form-select">
                        <option value="-1" selected >Select City</option>

                        <?php foreach($cities as $plate => $city):?>
                            <option 
                                value="<?php echo $plate; ?>" <?php echo $selectedCity == $plate ? ' selected':''; ?>>
                                    <?php echo $city; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <div class="text-danger">
                        <?php echo $cityErr; ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="hobbies">Hobbies</label>
                    <?php foreach($hobbies as $id => $hoby): ?>
                        <div class="form-check">
                            <input 
                                type="checkbox" 
                                name="hobbies[]"
                                value="<?php echo $hoby;?>"
                                id="hobbies_<?php echo $id;?>"
                                <?php if(in_array($hoby, $selectedHobbies)) echo 'checked'; ?>
                            >
                            <label for="hobbies_<?php echo $id; ?>" class="form-check-label">
                                <?php echo $hoby; ?>
                            </label>
                        </div>
                    <?php endforeach; ?>
                    <div class="text-danger">
                        <?php  echo $hobbiesErr; ?>
                    </div>
                </div>

                <button class="btn btn-primary" type="submit">Sign Up</button>
                
            </form>
        </div>
    </div>
</div>

<?php include "partials/_footer.php"; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>    
