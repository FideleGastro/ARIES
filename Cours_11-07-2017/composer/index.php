<?php
    require "vendor/autoload.php";
    //use lib\utile;

    $faker = Faker\Factory::create('fr_FR');
    $person = $faker->address;

    //vd($person);

    $u = new lib\Utile();
    $u->save($person, 'saveperson.txt');

    //$mpdf = new mPDF();
    //$mpdf->WriteHTML("<h1>".$person."</h1>");
    //$mpdf->output();
?>