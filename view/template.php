<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title><?= APP_NAME . (($pagetitle) ? ' &middot; ' . $pagetitle : null) ?></title>
        <meta name="description" content="<?= ($description) ?: $description ?>">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <!-- FontAwesome -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Toastr Alert's -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

        <!-- My Custom CSS's -->
        <link rel="stylesheet" href="<?= url('assets/css/main.css') ?>">
    </head>
    <body>

        <?= $v->insert('partials/ui/header') ?>

        <section class="content">
            <?= $v->insert('partials/ui/msg') ?>

            <?= $v->section('content') ?>
        </section>

        <?= $v->insert('partials/ui/footer') ?>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="//stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

        <!-- My Custom JS's -->
        <script src="<?= url('assets/js/site.js') ?>"></script>

        <?= $v->section('scripts') ?>
    </body>
</html>