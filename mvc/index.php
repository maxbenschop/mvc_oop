<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>boekenapplicatie</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 py-8 px-4">
    <h3 class="mb-4"><a href="?voegtoe" class="bg-blue-500 text-white px-4 py-2 rounded-md cursor-pointer">Boek toevoegen</a></h3>
    <?php
    error_reporting(E_ALL);
    error_reporting(-1);
    ini_set('error_reporting', E_ALL);

    require 'inc/config.inc.php';
    require 'models/Book.php';
    require 'controllers/BookController.php';

    $ctr = new BookController();

    if (isset($_GET['voegtoe'])) {
        if (isset($_POST['knop'])) {
            $ctr->newBook($_POST['naam'], $_POST['auteur'], $_POST['isbn']);
        } else {
    ?>
            <div class="mb-8">
                <form method="post" action="">
                    <div class="mb-4">
                        <label for="naam" class="block text-gray-700 font-bold">Title:</label>
                        <input type="text" id="naam" name="naam" required class="border-2 border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500 mb-4">
                    </div>
                    <div class="mb-4">
                        <label for="auteur" class="block text-gray-700 font-bold">Auteur:</label>
                        <input type="text" id="auteur" name="auteur" required class="border-2 border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500 mb-4">
                    </div>
                    <div class="mb-4">
                        <label for="isbn" class="block text-gray-700 font-bold">ISBN:</label>
                        <input type="text" id="isbn" name="isbn" required class="border-2 border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500 mb-4">
                    </div>
                    <div>
                        <button type="submit" name="knop" class="bg-blue-500 text-white px-4 py-2 rounded-md cursor-pointer">Confirm</button>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded-md cursor-pointer" onclick="window.location.href = '/'">Deny</button>
                    </div>
                </form>
            </div>
    <?php
        }
    }
    if (isset($_GET['id'])) {
        $ctr->showBook($_GET['id']);
    } else {
        $ctr->index();
    }

    if (isset($_GET['verwijder'])) {
        $ctr->deleteBook($_GET['verwijder']);
    }

    if (isset($_GET['pasaan'])) {
        if (isset($_POST['aanpasKnop'])) {
            echo ($_POST['id']);
            $ctr->updateBook($_POST['id'], $_POST['naam'], $_POST['auteur'], $_POST['isbn']);
        } else {

            $ctr->showUpdateForm($_GET['pasaan']);
        }
    }

    ?>
</body>

</html>