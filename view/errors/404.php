<?php $v->layout('template') ?>

<div class="container">
    <div class="row">
        <h1>Erro 404 - Page Not Found</h1>
        <div class="col-md-12">
            <p>
                Você está tentando acessar uma página que não existe, que está com a URL errada ou que foi removida do site.
                Se trata de uma mensagem automática avisando que aquela página não foi encontrada.
            </p>
            <a href="<?= url() ?>" class="btn btn-primary pull-right">Voltar à página Inicial</a>
        </div>
    </div>
</div>