<!DOCTYPE html>
<html lang="en">
<head>
    <title>Łańcuch znaków PHP 7</title>

    <?php
        require_once 'tpl/header.html';
    ?>
</head>
<body>

<h1>Łańcuch znaków <code>string</code> PHP 7</h1>

<div class="segment">
    <h2>Podstawowe funkcje</h2>

    <p><code>strlen()</code> - zwraca długość łańcucha</p>
    <code>echo strlen("Hello world!"); // outputs 12</code>

    <p><code>str_word_count()</code> - liczba słów w ciągu</p>
    <code>echo str_word_count("Hello world!"); // outputs 2</code>

    <p><code>strrev()</code> - odwraca ciąg</p>
    <code>echo strrev("Hello world!"); // outputs !dlrow olleH</code>

    <p><code>str_replace()</code> - funkcja wyszukuje określony tekst w ciągu</p>
    <p>Jeśli dopasowanie zostanie znalezione, funkcja zwraca pierwszą pozycję wystąpienia danego słowa. Jeśli nie zostanie znalezione dopasowanie, zwróci false.</p>
    <code>echo strpos("Hello world!", "world"); // outputs 6</code>

    <p><code>str_replace()</code> - funkcja zastępuje niektóre znaki innymi znakami w ciągu</p>
    <code>echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!</code>

</div>

<div class="segment">
    <h2>Funkcje łańcuchowe <a href="https://www.w3schools.com/php7/php7_ref_string.asp" target="_blank">link</a></h2>

    <p><code>addcslashes()</code> - zwraca ciąg znaków z odwrotnymi ukośnikami przed określonymi znakami</p>

    <p><code>addslashes()</code> - zwraca ciąg znaków z odwrotnymi ukośnikami przed predefiniowanymi znakami</p>

    <p><code>bin2hex()</code> - konwertuje ciąg znaków ASCII na wartości szesnastkowe</p>

    <p><code>chop()</code> - usuwa białe znaki lub inne znaki z prawego końca łańcucha</p>

    <p><code>chr()</code> - zwraca znak z określonej wartości ASCII</p>

    <p><code>chunk_split()</code> - dzieli łańcuch znaków na serię mniejszych części</p>

    <p><code>convert_cyr_string()</code> - konwertuje ciąg znaków z jednego zestawu znaków cyrylicy na inny</p>

    <p><code>convert_uudecode()</code> - dekoduje zakodowany ciąg</p>

    <p><code>convert_uuencode()</code> - koduje ciąg za pomocą algorytmu uuencode</p>

    <p><code>count_chars()</code> - zwraca informacje o znakach używanych w ciągu</p>

    <p><code>crc32()</code> - oblicza 32-bitowy crc dla ciągu</p>

    <p><code>crypt()</code> - jednokierunkowe mieszanie ciągów</p>

    <p><code>echo()</code> - wyświetla jeden lub więcej ciągów</p>

    <p><code>explode()</code> - dzieli ciąg na tablicę</p>

    <p><code>fprintf()</code> - zapisuje sformatowany ciąg do określonego strumienia wyjściowego</p>

    <p><code>get_html_translation_table()</code> - zwraca tablicę translacji używaną przez htmlspecialchars() i htmlentities()</p>

    <p><code>hebrev()</code> - konwertuj tekst hebrajski na tekst wizualny</p>

    <p><code>hebrevc()</code> - konwertuje hebrajski tekst na wizualny tekst i nowe linie (\n) na < br> </p>

    <p><code>hex2bin()</code> - konwertuje ciąg wartości szesnastkowych na znaki ASCII</p>

    <p><code>html_entity_decode()</code> - konwertować encje HTML na znaki</p>

    <p><code>htmlentities()</code> - konwertuje znaki na encje HTML</p>

    <p><code>htmlspecialchars_decode()</code> - konwertuje niektóre predefiniowane encje HTML na znaki</p>

    <p><code>htmlspecialchars()</code> - konwertuje niektóre predefiniowane znaki na encje HTML</p>

    <p><code>implode()</code> - zwraca ciąg znaków z elementów tablicy</p>

    <p><code>join()</code> -  Alias of implode()</p>

    <p><code>lcfirst()</code> - konwertuje pierwszy znak ciągu na małe litery</p>

    <p><code>levenshtein()</code> - zwraca odległość levenshtein między dwoma łańcuchami</p>

    <p><code>localeconv()</code> - zwraca ustawienia narodowe i formatowanie monetarne</p>

    <p><code>ltrim()</code> - usuwa białe znaki lub inne znaki z lewej strony łańcucha</p>

    <p><code>md5()</code> - oblicza hash md5 ciągu</p>

    <p><code>md5_file()</code> - oblicza hash md5 pliku</p>

    <p><code>metafon()</code> - oblicza klucz metafonu łańcucha</p>

    <p><code>money_format()</code> - zwraca łańcuch sformatowany jako ciąg waluty</p>

    <p><code>nl_langinfo()</code> - zwraca określone informacje lokalne</p>

    <p><code>nl2br()</code> - wstawia przerwanie linii HTML przed każdym znakiem nowej linii w ciągu</p>

    <p><code>number_format()</code> - formatuje liczbę z tysiącami zgrupowanymi</p>

    <p><code>ord()</code> - zwraca wartość ASCII pierwszego znaku ciągu</p>

    <p><code>parse_str()</code> - analizuje ciąg zapytania na zmienne</p>

    <p><code>print()</code> - wyświetla jeden lub więcej ciągów</p>

    <p><code>printf()</code> - wyświetla sformatowany łańcuch</p>

    <p><code>quoted_printable_decode()</code> - konwertuje ciąg znaków do druku cytowanego na ciąg 8-bitowy</p>

    <p><code>quoted_printable_encode()</code> - konwertuje ciąg 8-bitowy na cytowany ciąg do druku</p>

    <p><code>quotemeta()</code> - cytuje meta znaków</p>

    <p><code>rtrim()</code> - usuwa białe znaki lub inne znaki z prawej strony łańcucha</p>

    <p><code>setlocale()</code> - ustawia informacje o ustawieniach narodowych</p>

    <p><code>sha1()</code> - oblicza hash sha-1 ciągu</p>

    <p><code>sha1_file()</code> - oblicza hash sha-1 pliku</p>

    <p><code>similar_text()</code> - oblicza podobieństwo między dwoma łańcuchami</p>

    <p><code>soundex()</code> - oblicza klucz Soundex łańcucha</p>

    <p><code>sprintf()</code> - zapisuje sformatowany ciąg do zmiennej</p>

    <p><code>sscanf()</code> - analizuje dane wejściowe z łańcucha zgodnie z formatem</p>

    <p><code>str_getcsv()</code> - parsuj łańcuch csv do tablicy</p>

    <p><code>str_ireplace()</code> - zamień niektóre znaki w łańcuchu (bez rozróżniania wielkości liter)</p>

    <p><code>str_pad()</code> - dodaje łańcuch do nowej długości</p>

    <p><code>str_repeat()</code> - powtarza ciąg znaków określoną liczbę razy</p>

    <p><code>str_replace()</code> - zamień niektóre znaki w ciągu znaków (wielkość liter ma znaczenie)</p>

    <p><code>str_rot13()</code> - wykonuje kodowanie rot13 na łańcuchu</p>

    <p><code>str_shuffle()</code> - losowo tasuje wszystkie znaki w ciągu</p>

    <p><code>str_split()</code> - dzieli ciąg na tablicę</p>

    <p><code>str_word_count()</code> - policz liczbę słów w ciągu</p>

    <p><code>strcasecmp()</code> - porównuje dwa łańcuchy (bez rozróżniania wielkości liter)</p>

    <p><code>strchr()</code> - znajduje pierwsze wystąpienie ciągu w innym ciągu (alias strstr ())</p>

    <p><code>strcmp()</code> - porównuje dwa łańcuchy (wielkość liter jest uwzględniana)</p>

    <p><code>strcoll()</code> - porównuje dwa ciągi (porównanie ciągów oparte na ustawieniach regionalnych)</p>

    <p><code>strcspn()</code> - zwraca liczbę znaków znalezionych w łańcuchu przed znalezieniem jakiejkolwiek części określonych znaków</p>

    <p><code>strip_tags()</code> - usuwa znaczniki html i php z łańcucha</p>

    <p><code>stripcslashes()</code> - cytuje ciąg cytowany za pomocą addcslashes()</p>

    <p><code>stripslashes()</code> - XXX</p>

    <p><code>stripos()</code> - zwraca pozycję pierwszego wystąpienia ciągu znaków w innym ciągu znaków (wielkość liter nie jest uwzględniana)</p>

    <p><code>stristr()</code> - znajduje pierwsze wystąpienie ciągu znaków w innym ciągu znaków (wielkość liter nie jest uwzględniana)</p>

    <p><code>strlen()</code> - zwraca długość łańcucha</p>

    <p><code>strnatcasecmp()</code> - porównuje dwa ciągi za pomocą algorytmu „porządek naturalny” (wielkość liter jest różna)</p>

    <p><code>strnatcmp()</code> - porównuje dwa ciągi przy użyciu algorytmu „porządek naturalny” (wielkość liter jest uwzględniana)</p>

    <p><code>strncasecmp()</code> - porównanie łańcuchów pierwszych n znaków (bez rozróżniania wielkości liter)</p>

    <p><code>strncmp()</code> - porównanie ciągów pierwszych n znaków (wielkość liter jest uwzględniana)</p>

    <p><code>strpbrk()</code> - wyszukuje ciąg znaków dla dowolnego zestawu znaków</p>

    <p><code>strpos()</code> - zwraca pozycję pierwszego wystąpienia ciągu znaków w innym ciągu znaków (wielkość liter jest rozróżniana)</p>

    <p><code>strrchr()</code> - znajduje ostatnie wystąpienie ciągu w innym ciągu</p>

    <p><code>strrev()</code> - odwraca ciąg</p>

    <p><code>strripos()</code> - znajduje pozycję ostatniego wystąpienia ciągu znaków w innym ciągu znaków (wielkość liter nie jest uwzględniana)</p>

    <p><code>strrpos()</code> - znajduje pozycję ostatniego wystąpienia ciągu znaków w innym ciągu znaków (wielkość liter jest rozróżniana)</p>

    <p><code>strspn()</code> - zwraca liczbę znaków znalezionych w ciągu zawierającym tylko znaki z określonej listy znaków</p>

    <p><code>strstr()</code> - znajduje pierwsze wystąpienie ciągu w innym ciągu znaków (wielkość liter jest rozróżniana)</p>

    <p><code>strtok()</code> - dzieli ciąg na mniejsze łańcuchy</p>

    <p><code>strtolower()</code> - konwertuje ciąg znaków na małe litery</p>

    <p><code>strtoupper()</code> - konwertuje ciąg znaków na wielkie litery</p>

    <p><code>strtr()</code> - tłumaczy niektóre znaki w ciągu</p>

    <p><code>substr()</code> - zwraca część ciągu</p>

    <p><code>substr_compare()</code> - porównuje dwa ciągi z określonej pozycji początkowej (bezpieczny binarnie i opcjonalnie z rozróżnianiem wielkości liter)</p>

    <p><code>substr_count()</code> - zlicza liczbę wystąpień podłańcucha w ciągu</p>

    <p><code>substr_replace()</code> - zastępuje część łańcucha innym ciągiem</p>

    <p><code>trim()</code> - usuwa białe znaki lub inne znaki z obu stron łańcucha</p>

    <p><code>ucfirst()</code> - konwertuje pierwszy znak ciągu na wielkie litery</p>

    <p><code>ucwords()</code> - konwertuje pierwszy znak każdego słowa w ciągu znaków na wielkie litery</p>

    <p><code>vfprintf()</code> - zapisuje sformatowany ciąg do określonego strumienia wyjściowego</p>

    <p><code>vprintf()</code> - wysyła sformatowany ciąg</p>

    <p><code>vsprintf()</code> - zapisuje sformatowany ciąg do zmiennej</p>

    <p><code>wordwrap()</code> - opakowuje ciąg znaków na określoną liczbę znaków</p>


</div>

<?php
    require_once 'tpl/footer.html';
?>

</body>
</html>