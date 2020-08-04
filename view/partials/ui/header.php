<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="<?= url('') ?>">Meu Site</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav w-100 nav-justified">
                <li class="nav-item <?= is('') ?>"> <a class="nav-link" href="<?= url('') ?>">Home</a> </li>
                <li class="nav-item <?= is('quem-somos') ?>"> <a class="nav-link" href="<?= url('quem-somos') ?>">Quem Somos</a> </li>
                <li class="nav-item <?= is('servicos') ?>"> <a class="nav-link" href="<?= url('servicos') ?>">Serviços</a> </li>
                <li class="nav-item <?= is('galeria') ?>"> <a class="nav-link" href="<?= url('galeria') ?>">Galeria</a> </li>
                <li class="nav-item <?= is('contato') ?>"> <a class="nav-link" href="<?= url('contato') ?>">Contato</a> </li>
            </ul>
        </div>
    </nav>
</header>