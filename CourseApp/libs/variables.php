<?php 
    //*define ile title sabitini oluşturduk
    define('Title', "Popular Courses");

    //login işlemi için db_user adında array tanımladık 
    const db_user = array(
        "username" => "Kübra",
        "password" => "123456",
        "name" => "Kübra"
    );

    //category için bir array oluşturduk ve bu array içindede category isimleri ve durumu için başka array de oluşturduk
    $categories = array(
        array("Category_name" => "Programming", "active" => true),
        array("Category_name" => "Web Development", "active" => false),
        array("Category_name" => "Data Analysis", "active" => false),
        array("Category_name" => "Office Applications", "active" => false),
        array("Category_name" => "Mobil Applications", "active" => false)
    );


   
    $courses = array(
        "1" => array(
            "header" => "PHP COURSE",
            "altHeader" => "Advanced Web Development with PHP from Scratch",
            "img" => "1.jpg",
            "comments" => "100",
            "date" => "01.01.2024",
            "likes" => "300",
            "approval" => true
        ),
        "2" => array(
            "header" => "PHYTON COURSE",
            "altHeader" => "Advanced PHYTON Programming from Scratch",
            "img" => "2.jpg",
            "comments" => "450",
            "date" => "01.02.2024",
            "likes" =>"350",
            "approval" => true
        ),
        // "3" => array(
        //     "header" => "NODE.JS COURSE",
        //     "altHeader" => "Advanced Web Development witj NODE.JS from Scratch",
        //     "img" => "3.jpg",
        //     "comments" => "350",
        //     "date" => "03.02.2024",
        //     "likes" => "500",
        //     "approval" => true
        // )
    );

  sort($courses);// Alfabetik sıraalama

   $cities = array (
        "06" => "Ankara",
        "35" => "Izmir",
        "34" => "Istanbul",
        "33" => "Mersin",
        "55" => "Samsun"
    );

    sort($cities);

    $hobbies = array(
        "1" => "Cinema",
        "2" => "Spor",
        "3" => "Music",
        "4" => "Travel",
    );

?>