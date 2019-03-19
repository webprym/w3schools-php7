<!DOCTYPE html>
<html lang="en">
<head>
    <title>Instrukcje wyjścia PHP 7</title>

    <?php
        require_once 'tpl/header.html';
    ?>
</head>
<body>

<h1>Instrukcje wyjścia PHP 7</h1>

<div class="segment">
    <h2>Podstawy</h2>
    <p>Różnice są niewielkie: <code>echo</code> nie ma wartości zwracanej, podczas gdy <code>print</code> może zwracać jedną wartość - zatem można używać ją w wyrażeniach.</p>
    <p><code>echo</code> może przyjmować wiele parametrów (chociaż takie użycie jest rzadkie), podczas gdy <code>print</code> może przyjąć jeden argument.</p>
    <p><code>echo</code> jest marginalnie szybsze niż <code>print</code></p>
</div>

<div class="segment">
    <h2>Istrukcja <code>echo</code></h2>
    <p>Instrukcja <code>echo</code> może być używana z nawiasami lub bez: echo lub echo().</p>

    <p>Przykład</p>

    <code>
        echo "PHP is Fun!";<br>
        echo "Hello world!";<br>
        echo "I'm about to learn PHP!";<br>
        echo "This ", "string ", "was ", "made ", "with multiple parameters.";
    </code>

    <p><code>echo</code> może zawierać znaczniki HTML</p>

    <p>Przykład</p>

    <code>
        $txt1 = "Learn PHP";<br>
        $txt2 = "W3Schools.com";<br>
        $x = 5;<br>
        $y = 4;<br><br>

        echo "h1" . $txt1 . "h1";<br>
        echo "Study PHP at " . $txt2 . " elo!";<br>
        echo $x + $y;<br>
        echo "$txt1 nie trzeba rozdzielać kropkami :)";
    </code>

</div>

<div class="segment">
    <h2>Instrukcja <code>print</code></h2>
    <p>Instrukcja <code>print</code> może być używana z nawiasami lub bez: print lub print().</p>
    <p>Identycze przykłady jak w instrukcji <code>echo</code></p>


</div>


<?php
    require_once 'tpl/footer.html';
?>

</body>
</html>