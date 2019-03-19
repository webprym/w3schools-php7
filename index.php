<!DOCTYPE html>
<html lang="en">
<head>
    <title>Składnia PHP 7</title>

    <?php
        require_once 'tpl/header.html';
    ?>
</head>
<body>

<h1>Home</h1>

<div class="segment">
    <h2>Podstawowa składnia</h2>
    <p>Skrypt PHP może być pisany w dowolnym miejscu na stronie.</p>
    <p>Skrypt PHP zaczynamy od zancznika <code>< ?php i kończymy ?></code></p>
</div>


<?php

$fileList = glob('*.php');

echo '<ul>';
foreach($fileList as $filename){
    if(is_file($filename)){
        if($filename == 'index.php') {
            echo "<li><a href=\"./\">[Home]</a></li>";
        }
        else {
            echo "<li><a href=\"".str_replace ('.php', '', $filename)."\">$filename</a></li>";
        }

    }
}
echo '</ul>';



?>


<?php
    require_once 'tpl/footer.html';
?>

</body>
</html>