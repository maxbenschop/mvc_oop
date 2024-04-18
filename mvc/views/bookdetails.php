<h1>Boek Details</h1>
<?php
echo "ID: " . $book->id . "<br>";
echo "Title: " . $book->title . "<br>";
echo "Author: " . $book->author . "<br>";
echo "ISBN: " . $book->isbn . "<br>";
?>
<button class="text-blue-500 mt-4" onclick="window.location.href = '/'">Go Back</button>