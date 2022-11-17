<h1>Lista tabel w bazie danych <?=$database?></h1>
<?php
$query = 'Show tables';
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    echo '<ol style="list-style-type: circle;">';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<li>Numer: ' . $row['Nr_czytelnika']
            . '. Imię i nazwisko: ' . $row['Tables_in_biblioteka'] . ' ' . $row['Nazwisko'] . '</li>';
    }
    echo '</ol>';
} else {
    echo 'brak danych';}
?>