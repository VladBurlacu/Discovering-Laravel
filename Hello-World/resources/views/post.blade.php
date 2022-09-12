<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Discovering Laravel</title>
    <link rel="stylesheet" href="/app.css">
</head>

<body class="antialiased">

<article>
    <?= $post; ?>
</article>

<a href="/">Go Back</a>

</body>
</html>
