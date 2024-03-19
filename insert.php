<?php
// Establish database connection
$dbconnect = mysqli_connect('localhost', 'root', '', 'book') or die('Failed to connect to the database');


if(isset($_POST['submit'])) {

    $book_name =$_POST['book_name'];
    $book_author =$_POST['book_author'];
    $book_publisher =$_POST['book_publisher'];
    $publication_year =$_POST['publication_year'];

    
    $query = "INSERT INTO books (book_name, book_author, book_publisher, publication_year) 
              VALUES ('$book_name', '$book_author', '$book_publisher', '$publication_year')";
    
    if(mysqli_query($dbconnect, $query)) {
        echo "Book inserted successfully.";
    } else {
        echo "Error: " . mysqli_error($dbconnect);
    }
}


mysqli_close($dbconnect);
?>

<html>
    <head></head>
    <body>
        <form action="insert.php" method="post">
        <label for="">Book Name</label><input type="text" name=""><br>
        <label for="">Book Author</label><input type="Author" name=""><br>
        <label for="">Book Publisher</label><input type="Publisher" name=""><br>
        <label for="">Publication Year</label><input type="Year" name=""><br>
        <input type="submit" name="submit" value="register Book"><br>
        </form>
    </body>
</html>