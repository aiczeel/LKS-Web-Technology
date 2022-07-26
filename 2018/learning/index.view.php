<html>
<head>
    <title>Lesson</title>
<style>
    header {
        background: #808080;
        padding: 2em;
        text-align: center;
    }
</style>
</head>
<body>
    <header>
        <ul>
            <?php foreach($names as $name) : ?>
                <li><?= $name; ?></li>
            <?php endforeach; ?>
        </ul>
    </header>
</body>
</html>