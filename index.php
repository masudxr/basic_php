<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First PHP Code</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
        <?php
        $max = "Hello";
        $sukriya = "Alhamdulillah";
        $read = true;

        if ($read) {
            $msg = "Hello gamers !";
        }

        $books = [
            [
            'name' => 'masud',
            'author' =>"The Hit man",
            'link' => "https://www.facebook.com/"
            ],
            [
                'name' => 'masud',
                'author' =>"Rana",
                'link' => "https://www.facebook.com/"
            ],
            [
                'name' => 'Dark Knight',
                'author' =>"Rana",
                'link' => "https://www.facebook.com/"
            ],
        ];

        function filterByAuthor ($books) {
            $filterBooks = [];

            foreach ($books as $book) {
                if ($book['author'] === 'Rana') {
                    $filterBooks[] = $book;
                }
            }
            return $filterBooks;
        }
        ?>


    <h1>

   <?= $msg ?>
   <ul>
    <?php foreach (filterByAuthor($books) as $book): ?>
    <?php if ($book['name'] === 'Rana') ?>
        <li>
            <a href="<?= $book['link'] ?>" >
                <?= $book['name']; ?>-by (<?= $book['author']?>)
            </a>
        </li>
        <?php endforeach?>
   </ul>

    </h1>
</body>
</html>