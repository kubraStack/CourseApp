<?php 
   //Bu fonksiyonu kullanarak sayfaya yeni bir kurs ekleyeceğiz
   //(&) sembolü ile  courses dizisindeki elemanların referansını alıyoruz.
    function courseAdd(&$courses, string $header, string $altHeader, string $img, string $date, int $comments = 0, int $likes = 0, bool $approval = true){
        //Burada yeni kursu courses dizisinin en son elemanı yapmak için count ile eleman sayısını alıp + 1 ile sona eklemiş olduk
        $new_cours[count($courses) + 1] = array(
            "header" => $header,
            "altHeader" => $altHeader,
            "img" => $img,
            "comments" => $comments,
            "date" => $date,
            "likes" => $likes,
            "approval" => $approval
        );

        //İki diziyi birleştirmek için array_merge kullandık courses dizisini güncellemiş olduk
        $courses = array_merge($courses, $new_cours);
       
    }
    
    //Bu fonksiyon ile url'deki değerleri değiştirecek
    //str_replace => belirli karakterleri değiştirir
    //strtolower => diziyi küçük harfe çevirir
    function urlEdit($header){
        return str_replace([" ", "ç", "@", "."],["-", "c", " ", "-"],strtolower($header));
    }


    //Bu fonksiyon ile altHeader'ın uzunluğu 50den fazla ise substr ile oraya üç nokta koyuyoruz.
    function altHeaderEdit($altHeader){
        if (strlen($altHeader) > 20) {
            return substr($altHeader,0,30)."...";
        }else {
            return $altHeader;
        }
    }


    //Burada formdan gelen bilgileri düzgün güvenli şekilde kaydetmek için methodlar kullandık
    function safe_Html($data){
        $data = trim($data); //Bilgi içindeki boşlukları yokeder
        $data = stripcslashes($data); //Sql'e karşı süzme işlemi yapar(Bilgideki ters eğik çizgileri temizler )
        $data = htmlspecialchars($data); //html özel karakterlerini dönüştürür.
        return $data;
    }
    
    
?>

