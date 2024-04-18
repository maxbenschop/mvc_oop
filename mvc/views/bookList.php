<?php

if (count($boekenArray) > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>Id</th>";
    echo "<th>Title</th>";
    echo "<th>Author</th>";
    echo "<th>ISBN</th>";
    echo "</tr>";
    foreach ($boekenArray as $boek) {
        echo "<tr>";
        echo "<td>" . $boek->id . "</td>";
        echo "<td>" . $boek->title . "</td>";
        echo "<td>" . $boek->author . "</td>";
        echo "<td>" . $boek->isbn . "</td>";
        echo "<td><a href='?id={$boek->id}'>details</a></td>";
        echo "<td><a href='?verwijder={$boek->id}'>verwijder</a></td>";
        echo "<td><a href='?pasaan={$boek->id}'>pasaan</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Geen boeken gevonden!";
}
