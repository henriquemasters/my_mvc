<?php $v->layout('template') ?>

<div class="container">
    <div class="row">
        <h1>Erro 501 - Not Implemented</h1>
        <div class="col-md-12">
            <p>
                O servidor não suporta a funcionalidade requerida para completar a requisição.
                Esta é a resposta apropriada para quando o servidor não reconhece o método requisitado e não tem capacidade de suporta-lo para nenhum recurso.
            </p>
            <a href="<?= url() ?>" class="btn btn-primary pull-right">Voltar à página Inicial</a>
        </div>
    </div>
</div>