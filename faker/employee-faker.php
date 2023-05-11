<?php

    require('vendor/autoload.php');
    require('../config/config.php');
    require('../config/db.php');
    $faker = Faker\Factory::create('en_PH');
    for ($i = 1; $i <= 20; $i++) {
        $name = $faker-> name;
        $email = $faker-> email;
        $query = "Insert into charls.user (name,email) values('$name','$email')";
        mysqli_query($conn, $query);
    }   

?>