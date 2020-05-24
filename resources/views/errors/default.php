<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.2/css/bulma.min.css">
    <title>Document</title>
</head>
<body>
    <div >
        <div class="hero is-primary">
            <div class="hero-body">
                <div>
                    <h1 class="title is-1">Ocorreu um erro</h1>
                </div>
            </div>
        </div>
        <div class="container section">
            <h2 class="title is-4"><?= get_class($exception) ?></h2>
            <h2 class="title is-6"><?= $status ?></h2>
            <code>
                <?= $exception ?>
            </code>
        </div>
    </div>
</body>
</html>