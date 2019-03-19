<!DOCTYPE html>
<html lang="en">
<head>
    <title>Składnia PHP 7</title>

    <?php
        require_once 'tpl/header.html';
    ?>
</head>
<body>

<h1>Składnia PHP 7</h1>

<div class="segment">
    <h2>Podstawowa składnia</h2>
    <p>Skrypt PHP może być pisany w dowolnym miejscu na stronie.</p>
    <p>Skrypt PHP zaczynamy od zancznika <code>< ?php i kończymy ?></code></p>
</div>

<div class="segment">
    <h2>Komentarze</h2>
    <p><code>// jednolinijkowy komentarz</code></p>
    <p><code># jednolinijkowy komentarz</code></p>
    <p><code>/* komentarz wielolinijkowy */</code></p>
    <p><code>$x = 5 /* + 15 */ + 5;</code></p>
</div>

<div class="segment">
    <h2>Rozróżnianie wielkości liter</h2>
    <p>W PHP wielkość liter nie ma znaczenia dla instrukcji:</p>
    <p><code>if, else, while, echo, itd, kalas, funkcji</code></p>
    <p><code>ECHO "Hello World!";<br>echo "Hello World!";<br>EcHo "Hello World!";</code></p>

    <p>Wielkość liter ma znaczenie w zmiennych!</p>
</div>

<?php
    require_once 'tpl/footer.html';
?>

</body>
</html>