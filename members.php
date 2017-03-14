<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Selectare membrii</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<a href="http://www.asii.ro" class="backBotton">
    <b>Inapoi pe asii.ro</b>
</a>
<a href="login.php" class="logoutBotton">
    <b>Logout</b>
</a>
<div class="content">
    <header>
        <img id="logo" src="img/logoASII.png"/>
        <span></span>
        <br />
        <a class="madmis" href="/members.php?showAdmis=1">Afiseaza membrii admisi</a>
        <a class="madmis" href="/members.php">Lista de inscrisi</a>
    </header>
    <div class="items">
        <div class="item">
            <img class="photo" src="<?php echo $membru["image"]?>" />
            <div class="first" > <a target="_blank" href="<?php echo $membru["facebook"] ?>"><?php echo $membru["nume"]?></a></div>
            <div class="second">
                <a class="admis" type="submit" href="/members.php?ad=<?php echo $membru["id"]?>" >Admis</a> <br>
                <a class="respins" type="submit" href="/members.php?respinge=<?php echo $membru["id"]?>" >Respins</a>
            </div>
            <div class="clearFloat"></div>
        </div>
    </div>
</div>
<footer id="footer">
    Asociaţia Studenţilor Informaticieni Ieşeni (ASII) este reprezentată de un grup de persoane determinate, creative şi dinamice, ce au în comun pasiunea pentru Informatică şi împărtăşesc un set de<br>
    ţeluri şi valori. Activităţile organizate în cadrul asociaţiei se adresează studenţilor şi profesorilor Facultăţii de Informatică Iaşi, dar şi comunităţii IT din România, dorind să promoveze proactivitatea,<br>
    dezvoltarea profesională, personală şi socială.<br>
    Copyright © ASII 2016
</footer>
</body>
</html>