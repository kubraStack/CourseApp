<!-- foreach ile courses dizisindeki elamanların her döngüde anahtar ve değerini temsil edip işlemleri bunlar üzerinde yaptık -->
<?php foreach($courses as $key => $cours): ?>
    <!-- Eğer cours dizisi içinde approval varsa onları gösterecek   -->
    <?php if($cours["approval"]): ?> 
        <div class="card mb-4">
            <div class="row p-1">
                <div class="col-4">
                    <img src="img/<?php echo $cours["img"]; ?>" alt="" class="img-fluid rounded-2">
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?php urlEdit($cours["header"]); ?>" class="text-danger text-decoration-none">
                                <?php echo $cours["header"]; ?> 
                            </a>
                        </h5>
                        <p class="card-text">
                            <?php echo altHeaderEdit($cours["altHeader"]); ?>
                        </p>
                        <p class="icons">
                            <span class="badge rounded-pill text-bg-primary text-decoretion-none">
                                Likes: <?php echo $cours["likes"]; ?> <i class="fa-solid fa-thumbs-up ms-1"></i>
                            </span>
                            <span class="badge rounded-pill text-bg-danger text-decoration-none">
                                Comments: <?php echo $cours["comments"];?> <i class="fa-solid fa-comment ms-1"></i>
                            </span>
                            <span class="badge rounded-pill text-bg-secondary text-decoration-none">
                                Publication Date: <?php echo $cours["date"]; ?> <i class="fa-solid fa-calendar-days ms-1"></i>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
    <?php endif ?>
<?php endforeach; ?>