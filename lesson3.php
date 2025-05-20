<?php include "includes/header.php" ?>

<section class="main">
    <?php
    //vong lap if
    $DatNuoc = "TrungQuoc";

    if ($DatNuoc == "VietNam") {
        echo "Toi Yeu Viet Nam";
    } elseif ($DatNuoc == "TrungQuoc") {
        echo "Khong phai Viet Nam";
    } else {
        echo "Toi o Gia Lai";
    }
    echo "</br>";

    //Vong lap for
    for ($i = 1; $i <= 10; $i++) {
        echo $i;
    }
    echo "</br>";
    // vong lap swich case
    $thang = "thangn3";
    switch ($thang) {
        case "thangn1":
            echo "Thang 1";
            break;
        case "thangn2":
            echo "Thang 2";
            break;
        case "thangn3":
            echo "Thang 3";
            break;
        case "thangn4":
            echo "Thang 4";
            break;
        case "thangn5":
            echo "Thang 5";
            break;
        default:
            echo "thang 10";
            break;
    }
     echo "</br>";
     //Vong lap while
     $count = 0; 
     while($count<=10){
        echo $count;
        $count++;
    
     }
      echo "</br>";
      // vong lap foreach

     $numberArray = array(1,2,3,4,5,6,7,8,9,10);
     foreach($numberArray as $num){// loc tung gia tri trong mang $numberarray qua bien $num
        echo $num;
     }

    ?>

</section>

<?php include "includes/footer.php" ?>