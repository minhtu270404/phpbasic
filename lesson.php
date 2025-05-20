<?php include "includes/header.php" ?>

<section class="main">
    <?php

    //   TODO 1: Global Variable
    echo "</br>";

    $global = "outside";
    function Convert()//* khai bao ham
    {
        global $global;
        $global = "inside";
    }
    echo $global;
    echo "</br>";//* xuong dong
    Convert();//* goi ham ra
    echo $global;//* lay du lieu trong ham 
    


    echo '<h2 style="color:blue">Constant Variable </h2>';
    echo "</br>";

    $number = 10;
    echo $number . "</br>";

    define("HangSo", 1000);
    echo HangSo;


    echo '<h2 style="color:blue">Variable  $$ </h2>';

    echo "</br>";
    $a = "name";//? tao bien a
    $$a = "TU";//? doi gia tri bien a thanh gia tri moi 
    echo $name;//? goi bien a ra nhung bay gio bien a la gia tri moi

    ?>

</section>

<?php include "includes/footer.php" ?>