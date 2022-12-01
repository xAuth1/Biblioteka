<pre>
<?php
print_r ($_COOKIE)
?>
</pre>

<h3>Wszystko z supertablicy $_COOKIE</h3>
<?php
echo '<pre>';
print_r($_COOKIE);
echo '</pre>';

if (isset($_COOKIE['ciastko'])) {
    echo '<p>Dane z ciastak wyświetlone jako tablica asocjacyjna</p><pre>';
    print_r(json_encode($_COOKIE['ciastko'], true));
    echo '</pre>';

    echo '<p>Dane ciastka wyświetlane jak tekst JSON:</p><pre>'.$_COOKIE['ciastko'].'</pre>';
}
?>

<pre>
<?php
print_r($_SESSION)
?>
</pre>

