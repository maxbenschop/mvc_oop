<form method="post" action="">
    <input type="hidden" name="id" value="<?php echo $book->id; ?>">
    <label for="title" class="block text-gray-700 font-bold">Title:</label>
    <input type="text" id="title" name="naam" value="<?php echo $book->title; ?>" class="border-2 border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500 mb-4"><br>
    <label for="author" class="block text-gray-700 font-bold">Author:</label>
    <input type="text" id="author" name="auteur" value="<?php echo $book->author; ?>" class="border-2 border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500 mb-4"><br>
    <label for="isbn" class="block text-gray-700 font-bold">ISBN:</label>
    <input type="text" id="isbn" name="isbn" value="<?php echo $book->isbn; ?>" class="border-2 border-gray-300 rounded-md p-3 focus:outline-none focus:border-blue-500 mb-4"><br><br>
    <input type="submit" name="aanpasKnop" value="Update" class="bg-blue-500 text-white px-6 py-3 rounded-md hover:bg-blue-600 transition duration-200">
</form>
<button class="bg-blue-500 text-white px-4 py-2 rounded-md cursor-pointer" onclick="window.location.href = '/mvc'">Go Back</button>