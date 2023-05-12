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
        $books = [
            [
            'name' => 'The Hit Man',
            'author' =>"Masud",
            'link' => "https://www.facebook.com/"
            ],
            [
                'name' => 'And then there were none',
                'author' =>"Rana",
                'link' => "https://www.facebook.com/"
            ],
            [
                'name' => 'Dark Knight',
                'author' =>"Rana",
                'link' => "https://www.facebook.com/"
            ],
        ];

        function filter ($items, $key, $value) {
            $filteredItems = [];

            foreach ($items as $item) {
                if ($item[$key] === $value) {
                    $filteredItems[] = $item;
                }
            }
            return $filteredItems;
        }
        $filterBooks = filter($books, 'author', 'Rana');
        ?>
    <h1>
   <ul>
    <?php foreach ($filterBooks as $book): ?>
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