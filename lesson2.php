<?php include "includes/header.php" ?>

<section class="main">
    <?php
    $number1 = 10;
    $number2 = 20;
    $sum = $number1 + $number2;
    echo $sum . "</br>";


    //* Tao hai mang
    $regularArray = array(15, 20, 25);
    print_r($regularArray);
    echo $regularArray[0]. "</br>";

    $assoArray = array("first" => 10, "second"=> 13,"third"=> 20);//khai bao mang
    print_r($assoArray)."</br>";//in cau truc mang 
    echo $assoArray['first']. "</br>";// goi mot bien trong ham ra


    ?>

</section>

<?php include "includes/footer.php" ?>