<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>construct</title>
</head>
<body>
    <?php
        class Book {
            var $title;
            var $author;
            var $pages;

            function __construct($aTitle,$aAuthor,$aPages)
            {
                $this->title = $aTitle;
                $this->author = $aAuthor;
                $this->pages = $aPages; 

                echo "Title: $aTitle,Author: $aAuthor,Pages: $aPages<br>";
            }
        }

        $book1 = new Book("Harry Potter","JK Rowling",400);
        $book2 = new Book("Harry Potter2","JK Potter",450);

    ?>
</body>
</html>