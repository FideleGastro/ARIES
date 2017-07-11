<?php 
    require "session.php";
    Session::start();
    Session::set('auth', ['pseudo' => 'Rafix', 'profil'=>'admin']);
    print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php if(Session::existe('auth')): ?>
        <h1>Salut <?= Session::get('auth', 'pseudo') ?></h1>
        <a href="?destroy=true" >destroy</a>
    <?php else : ?>
        <p> <?= $msg ?> FALSE </p>
    <?php endif; ?>    
</body>
</html>