<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Default Title' ?></title>
</head>
<body>
<header>
    <h1>Site Header</h1>
    <nav>
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>
</header>

<main>
    <?= $content ?? '' ?> <!-- Ana içerik buraya yüklenecek -->
</main>

<footer>
    <p>Site Footer</p>
</footer>
</body>
</html>
