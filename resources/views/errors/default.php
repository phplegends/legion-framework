<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.2/css/bulma.min.css">
    <title><?= $CONFIG['name'] ?></title>
</head>
<body>

    <div class="hero is-danger">
            <div class="hero-body">
                <div class="container">
                    <div class="title is-3">Ocorreu um erro</div>
                </div>
            </div>
    </div>
    <section class="section">
        <div class="container ">
            <h2 class="title is-4"><?= get_class($exception) ?></h2>
            <h2 class="title is-6"><?= $status ?></h2>
            <div class="box" style="white-space: pre-line"><?= $exception ?></div>
        </div>
    </section>
</body>
</html>