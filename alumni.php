<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inscriere membrii ASII</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<a href="http://www.asii.ro" class="backBotton">
    <b>Inapoi pe asii.ro</b>
</a>
<div class="content">
    <header>
        <img id="logo" src="img/logoASII.png"/>
        <span><b>Database Update</b></span>
    </header>
    <section>
        <form class="submitForm" method="post" action="index.php" enctype="multipart/form-data">
            <br>
            <input type="text" name="nume" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name' "/><br>
            <input type="text" name="prenume" placeholder="Prenume" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Prenume' "/><br>
            <input type="text" name="facebook" placeholder="Facebook url" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Facebook url' "/><br>

            <select class="select">
                <option value="it">IT</option>
                <option value="proiecte">Proiecte</option>
                <option value="pr&media">Pr&amp;Media</option>
                <option value="evaluari">Evaluari</option>
                <option value="ri">RI</option>
                <option value="re">RE</option>
            </select>
            <br>
            <p id="imageUpload">Motivul pentru care ați ieșit alumni.</p>
            <textarea class="discurs" placeholder="Introdu textul tău aici" onfocus="this.placeholder = ''"></textarea>
            <br>
            <button id="button" type="submit" name="submit" value="1">Trimite</button>
            <br>
        </form>
        <br>
    </section>
</div>
<footer id="footer">
    Asociaţia Studenţilor Informaticieni Ieşeni (AŞII) este reprezentată de un grup de persoane determinate, creative şi dinamice, ce au în comun pasiunea pentru Informatică şi împărtăşesc un set de<br>
    ţeluri şi valori. Activităţile organizate în cadrul asociaţiei se adresează studenţilor şi profesorilor Facultăţii de Informatică Iaşi, dar şi comunităţii IT din România, dorind să promoveze proactivitatea,<br>
    dezvoltarea profesională, personală şi socială.<br>
    Copyright © ASII 2016
</footer>
</body>
</html>