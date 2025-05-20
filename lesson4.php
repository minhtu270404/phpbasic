<?php include "includes/header.php" ?>

<section class="main">
    <?php
    $number = 9;
    echo "Can ban 2 cua $number " . " la: " . sqrt($number);// tinh can bac hai ham cua can bac hai la sqrt
    
    $String = "nguyen minh tu";//khai bao bien
    echo strtoupper($String);// strtoupper la phuong thuc viet hoa

    $abc = array("hh", "ee", "aa");//khai bao ham
    print_r(array_reverse($abc));//array_reverse la phuong thuc dao nguoc, print la in ham ra
    ?>

</section>

<?php include "includes/footer.php" ?>