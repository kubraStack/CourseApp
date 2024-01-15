<div class="list-group mt-4">
    <!-- categories dizisi içindeki öğelere count ile ulaşıp öğe sayısını döndürdük categories dizisi içindeki elemanların içinde active class'ı varsa onu ekledik
    daha sonra dönen elemanların category_name'ini yazdırdık
    -->
    <?php for($i=0; $i < count($categories); $i++): ?>
        <a 
            href="#",
            class="list-group-item list-group-item-dark  <?php echo ($categories[$i]["active"])? "active":""; ?>">

            <?php echo $categories[$i]["Category_name"]; ?>

        </a>
    <?php  endfor; ?>
</div>