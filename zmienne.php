<!DOCTYPE html>
<html lang="en">
<head>
    <title>Zmienne PHP 7</title>

    <?php
        require_once 'tpl/header.html';
    ?>
</head>
<body>

<h1>Zmienne PHP 7</h1>

<div class="segment">
    <h2>Tworzenie (deklarowanie) zmiennych</h2>
    <p>Zmienne rozpoczynamy znakiem <code>$</code>, a następnie podajemny nazwę zmiennej</p>
    <code>
        $txt = "Hello world!";<br>
        $x = 5;<br>
        $y = 10.5;<br>
    </code>
    <p>Uwaga: w przeciwieństwie do innych języków programowania, PHP nie ma polecenia do zadeklarowania zmiennej. Zmienna jest tworzona w momencie, gdy po raz pierwszy przypisujemy jej wartość.</p>

    <p>Zmienne to tzw. "kontenery do przechowywania danych"</p>
</div>

<div class="segment">
    <h2>Główne zasady tworzenia zmiennych</h2>
    <p>Zmienna zaczyna się znakiem <code>$</code>, po którym następuje nazwa zmiennej</p>
    <p>Nazwa zmiennej musi zaczynać się od litery lub znaku podkreślenia</p>
    <p>Nazwa zmiennej nie może zaczynać się od liczby</p>
    <p>Nazwa zmiennej może zawierać tylko znaki alfanumeryczne i podkreślenia (A-z, 0-9 i _)</p>
    <p>W nazwach zmiennych rozróżniana jest wielkość liter ($age i $Age to dwie różne zmienne)</p>

</div>

<div class="segment">
    <h2>Typy zmiennych w PHP</h2>
    <p>PHP automatycznie kojarzy typ danych ze zmienną, w zależności od jej wartości. Typy danych nie są ustawione w ścisłym znaczeniu. Możemy np.: robić takie rzeczy jak dodawanie ciągu do liczby całkowitej bez powodowania błędu.</p>
    <p>W PHP 7 dodano deklaracje typów. Daje to możliwość określenia typu danych oczekiwanych podczas deklarowania funkcji. Włączenie ścisłego wymogu spowoduje wygenerowanie „krytycznego błędu” w przypadku niezgodności typu.</p>

    <p>Skalar</p>
    <code>
        // integer int - liczba całkowita<br>
        // float - liczba zmiennoprzecinkowa<br>
        // string - sekwencja znaków<br>
        // unicode - sekwencja znaków Unicode<br>
        // binary - sekwencja znaków binarnych (nie unicode)<br>
        // boolean bool -  	true, false
    </code>
    <p>Złożone typy danych</p>
    <code>
        // array int - może przechowywać wiele wartości indeksowanych liczbami lub łańcuchamibr><br>
        // object - może przechowywać wiele wartości (właściwości), a także może zawierać metody (funkcje) do pracy z właściwościami<br>
    </code>
    <p>Specjalne typy danych</p>
    <code>
        // resource - używany do uzyskiwania dostępu do zewnętrznego zasobu (na przykład uchwyt pliku lub połączenie z bazą danych)<br>
        // null - brak wartości<br>
    </code>

    <p><code>settype()</code> - funkcja do zmiany typu danych</p>
    <p>Zmienną można rzutować - np <code>(int)$z1</code> </p>

    <p>Aby sprawdzić tpy zmiennej należy skorzystać z funkcji <code>is_[TYP-DANYCH]([WARTOŚC])</code> która zwraca prawdę/fałsz</p>
</div>

<div class="segment">
    <h2>Zakres zmiennych</h2>
    <p>W PHP zmienne można zadeklarować w dowolnym miejscu skryptu</p>
    <p>Zakres zmiennej jest częścią skryptu, do której można odwoływać się / używać zmiennej.</p>
    <p>PHP ma trzy różne zakresy zmiennych:</p>
    <code>
        local<br>
        global<br>
        static
    </code>

    <p>Zmienna zadeklarowana poza funkcją ma zasięg globalny i można uzyskać do niej dostęp tylko poza funkcją.</p>

    <p>Zmienna zadeklarowana w ramach funkcji ma zasięg lokalny i można uzyskać do niej dostęp tylko w ramach tej funkcji.</p>

    <p>Możemy używać zmienne lokalne o tej samej nazwie w różnych funkcjach, ponieważ zmienne lokalne są rozpoznawane tylko przez funkcję, w której są zadeklarowane.</p>

</div>

<div class="segment">
    <h2>Słowo kluczowe <code>global</code></h2>

    <p>Słowo kluczowe global służy do uzyskiwania dostępu do zmiennej globalnej z poziomu funkcji.</p>

    <code>Aby to zrobić, użyj globalnego słowa kluczowego przed zmiennymi (wewnątrz funkcji)<br>np.: global $x, $y;</code>

    <p>PHP przechowuje również wszystkie zmienne globalne w tablicy o nazwie <code>$GLOBALS[index]</code>. Index zawiera nazwę zmiennej. Tablica jest również dostępna z poziomu funkcji i może być używana do bezpośredniej aktualizacji zmiennych globalnych.</p>

</div>

<div class="segment">
    <h2>Słowo kluczowe <code>static</code></h2>

    <p>Normalnie, gdy funkcja jest zakończona / wykonana, wszystkie jej zmienne są usuwane. Czasami jednak chcemy, aby lokalna zmienna nie została usunięta, ponieważ potrzebujemy jej do dalszej pracy.</p>
    <p>Aby to zrobić, użyj słowa kluczowego <code>static</code> podczas pierwszego zadeklarowania zmiennej.<br> <code>np.: static $x, $y;</code></p>

    <p>Za każdym razem, gdy wywoływana jest funkcja, ta zmienna nadal będzie miała informacje zawarte w ostatnim wywołaniu funkcji.</p>

</div>


<?php
    require_once 'tpl/footer.html';
?>

</body>
</html>