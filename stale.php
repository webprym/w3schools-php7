<!DOCTYPE html>
<html lang="en">
<head>
    <title>Stałe PHP 7</title>

    <?php
        require_once 'tpl/header.html';
    ?>
</head>
<body>

<h1>Stałe <code>define()</code>PHP 7</h1>

<div class="segment">
    <h2>Podstawowa składnia</h2>
    <p>Stałe są jak zmienne, z wyjątkiem tego, że po ich zdefiniowaniu nie można ich zmienić ani zdefiniować.</p>
    <p>Stała jest identyfikatorem (nazwą) prostej wartości - ów wartości nie można zmienić podczas wykonywania skryptu.</p>
    <p>poprawna nazwa stałej zaczyna się od litery lub znaku podkreślenia (brak znaku $ przed stałą nazwą).</p>
    <p><strong>W przeciwieństwie do zmiennych, stałe są automatycznie globalne w całym skrypcie</strong></p>
</div>

<div class="segment">
    <h2>Tworzenie stałej</h2>
    <p>Aby utworzyć stałą, należy użyć funkcji <code>define()</code></p>
    <p>Składnia</p>
    <p><code>define(name, value, case-insensitive)</code><br>
        name: określa nazwę stałej<br>
        value: określa wartość stałej<br>
        case-insensitive: określa, czy stała nazwa powinna uwzględniać wielkości liter. Wartość domyślna: false
    </p>

    <p>Poniższy przykład tworzy stałą o nazwie uwzględniającej wielkość liter:</p>

    <p>
        <code>
            define("GREETING", "Welcome to W3Schools.com!");<br>
            echo GREETING; // OK
        </code>
    </p>

    <p>Poniższy przykład tworzy stałą o nazwie bez rozróżniania wielkości liter:</p>

    <p>
        <code>
            define("GREETING", "Welcome to W3Schools.com!", true);<br>
            echo greeting; // OK
        </code>
    </p>

</div>


<div class="segment">
    <h2>Stałe tablice</h2>
    <p><code>
            define("cars", [<br>
            "Alfa Romeo",<br>
            "BMW",<br>
            "Toyota"<br>
            ]);<br><br>
            echo cars[0];
        </code></p>
</div>

<div class="segment">
    <h2>Stałe są globalne</h2>
    <p>Stałe są automatycznie globalne i mogą być używane w całym skrypcie</p>

    <p>Przykład! <br> Poniższy przykład używa stałej wewnątrz funkcji, nawet jeśli jest zdefiniowana poza funkcją !!!</p>

    <p>
        <code>
            define("GREETING", "Welcome to W3Schools.com!");<br><br>

            function myTest() {<br>
            echo GREETING;<br>
            }<br><br>

            myTest();
        </code>
    </p>

</div>


<?php
    require_once 'tpl/footer.html';
?>

</body>
</html>