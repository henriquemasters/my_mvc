<table border="1" cellpadding="10">
    <thead><tr><th colspan="2">Uma nova mensagem da Página de Contato chegou para você! Segue abaixo os detalhes da mensagem:</th></tr></thead>
    <tbody>
        <?php foreach ($datas as $key => $data): ?>
            <tr>
                <th><?= ucwords($key) ?></th><td><?= $data ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>