<?php 
  
  //$_GET methodu ile gelen URL içinde "q" parametresi varsa ve boş değilse if bloğu çalışacak 
  //"empty" fonksiyonu, bir değişkenin boş olup olmadığını kontrol eder.
    if (!empty($_GET["q"])) {
        //$_Get methodundan gelen "q" parametresini filtreleme işleminde kullanmak için keyword değişkenine atadık.
        $keyword = $_GET["q"];

        //courses dizisindeki elemanları filtrelemek için array_filter fonksiyonunu kullandık.
        //stristr ile büyük küçük harf duyarsız bir şekilde kontrol etmemizi sağlar
        //Eğer keyword ile gönderilen bilgiler header veya altheader ile uyulur ise filtreleme gerçekleşmiş olacak.
        // use ile keywordü global olarak kullanacağımızı belirttik -->

        $courses = array_filter($courses, function($cours) use ($keyword){
            return stristr($cours['header'], $keyword) or (stristr($cours['altHeader'], $keyword));
        });
    }


?>


<nav class="navbar navbar-expand-lg bg-dark ">
    <div class="container">
        <a href="index.php" class="navbar-brand text-white">CourseApp</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span>
                <i class="fa-solid fa-bars" style="color: #fafafa;"></i>
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item ">
                    <a href="index.php" class="nav-link text-white active">Home</a>
                </li>
                <li class="nav-item">
                    <a href="create.php" class="nav-link text-white">Course Add</a>
                </li>
            
                <!-- Burada kullanıcının bilgileri(Auth, name) Cookie'de yer alıyorsa 
                    Çıkıs bağlantısı ve kullanıcının adıyla bir karşılama mesahı verdik
                    Kimlik doğrulanmadıysa giriş ve kayıt ol bağlantılarını gösterdik
                -->
           
                <?php if(isset($_COOKIE["auth"]) && isset($_COOKIE["auth"]["name"])): ?>

                    <li class="nav-item">
                        <a href="logout.php" class="nav-link text-white">Logout</a>
                    </li>
                    <li class="nav-item">
                        <!-- Cookie içindeki auth propundaki name bilgisini vermiş olduk -->
                        <a href="login.php" class="nav-link text-white">
                            Welcome, <?php echo $_COOKIE["auth"]["name"]; ?>
                        </a>
                    </li>
                <?php else: ?>

                    <li class="nav-item">
                        <a href="login.php" class="nav-link text-white">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="register.php" class="nav-link text-white">Register</a>
                    </li>
                <?php endif ?>
            </ul>
            <!-- Burada kurslar içinde arama yapmak için bir arama inputu oluşturduk -->
            <form action="index.php" class="d-flex" method="get">
                <input type="text" name="q" class="form-control me-2 searchInpt" placeholder="Keyword">
                <button type="submit" class="btn btn-success">Search</button>
            </form>
        </div>
       
        
    </div>
</nav>