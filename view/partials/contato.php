<?php $v->layout('template') ?>

<div class="container">
    <h4><?= $pagetitle ?></h4>
    <div class="row">
        <div class="col-md"><?= $description ?></div>
    </div>
    <div class="row">
        <div class="col-md mt-3">
            <form class="form-horizontal" name="contactForm" action="<?= url('contato') ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="col-md-6">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" value="" placeholder="Informe seu nome completo" required="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label for="name">Telefone</label>
                        <input type="text" class="form-control phone" id="phone" name="phone" value="" placeholder="Telefone para Contato" required="">
                    </div>
                    <div class="col-md-6">
                        <label for="name">E-mail</label>
                        <input type="text" class="form-control" id="email" name="email" value="" placeholder="E-mail para Contato">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label for="name">Mensagem</label>
                        <textarea class="form-control" id="message" name="message" placeholder="Deixe sua Mensagem aqui..." required="" style="resize: none; height: 100px"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-paper-plane"></i> Enviar Mensagem</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $v->start('scripts') ?>
<script src="<?= url('assets/js/jquery.maskedinput.min.js') ?>"></script>

<script>
    $(function () {
        $('.phone').focusout(function () {
            var phone, element;
            element = $(this);
            element.unmask();
            phone = element.val().replace(/\D/g, '');
            if (phone.length > 10) {
                element.mask("(99) 99999-999?9");
            } else {
                element.mask("(99) 9999-9999?9");
            }
        }).trigger('focusout');
    });
</script>
<?php $v->end() ?>