<?php

namespace Source\App;

use League\Plates\Engine;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Plasticbrain\FlashMessages\FlashMessages;

/**
 * Description of Web
 *
 * @author GH
 */
class Web {

    private $view;
    private $msg;

    /**
     *
     */
    public function __construct() {
        $this->view = Engine::create(__DIR__ . '/../../view', 'php');
        $this->msg = new FlashMessages();
    }

    /**
     *
     * @return void
     */
    public function home(): void {
        echo $this->view->render('partials/home', [
            'pagetitle' => null,
            'description' => 'Seja bem vindo!'
        ]);
    }

    /**
     *
     * @return void
     */
    public function about(): void {
        echo $this->view->render('partials/quem-somos', [
            'pagetitle' => 'Quem Somos',
            'description' => 'Descubra quem somos e conheça nossa História.'
        ]);
    }

    /**
     *
     * @return void
     */
    public function service(): void {
        echo $this->view->render('partials/servicos', [
            'pagetitle' => 'Serviços',
            'description' => 'Descubra quais são os nossos serviços e em que estamos trabalhando!'
        ]);
    }

    /**
     *
     * @return void
     */
    public function portifolio(): void {
        echo $this->view->render('partials/galeria', [
            'pagetitle' => 'Galeria',
            'description' => 'Veja foto dos nossos trabalhos nessa Galeria!'
        ]);
    }

    /**
     *
     * @return void
     */
    public function contact(): void {
        echo $this->view->render('partials/contato', [
            'pagetitle' => 'Contato',
            'description' => 'Precisa de Ajuda? Utilize nosso formulário de Fale Conosco ou entre em contato conosco!',
            'msg' => $this->msg
        ]);
    }

    /**
     *
     * @param array $data
     * @return void
     */
    public function error(array $data): void {
        echo $this->view->render("errors/{$data['errcode']}", [
            'pagetitle' => "Erro {$data['errcode']}",
            'description' => "Oooooops! Erro {$data['errcode']}"
        ]);
    }

    /**
     *
     * @param array $data
     * @return void
     */
    public function sendContact(array $data): void {
        if ($this->doMailContact($data)) {
            $this->msg->success('Mensagem enviada com sucesso. Em breve entraremos em contato com você.', ROOT . '/contato');
        } else {
            $this->msg->error('Erro ao tentar enviar mensagem! Entre em contato conosco através de outro canal.', ROOT . '/contato');
        }
    }

    /**
     *
     * @param array $data
     * @return bool
     */
    private function doMailContact(array $data): bool {
        $mail = new PHPMailer(true);
        try {
            //  $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();

            $mail->Host = MAIL['host'];
            $mail->SMTPAuth = true;
            $mail->Username = MAIL['user'];
            $mail->Password = MAIL['pwd'];
            $mail->SMTPSecure = MAIL['secure'];
            $mail->Port = MAIL['port'];

            $mail->From = MAIL['from_email'];
            $mail->FromName = MAIL['from_name'];

            // Coloque aqui, o email e o nome do destinatário que irá receber as mensagens da Página de contato...
            $mail->addAddress('henrique.masters@gmail.com', 'Henrique Mariano');

            //  $mail->addCC('cc@example.com'); // Com cópia
            //  $mail->addBCC('cc@example.com'); // Com cópia oculta
            //
            //  Enviar mensagens com ANEXO.
            //  $mail->addAttachment('/var/tmp/file.tar.gz');    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');

            $mail->isHTML(true);

            $mail->CharSet = 'utf-8';
            $mail->Subject = 'Contato - Uma Nova Mensagem ' . date('d-m-Y H:i:s');

            // Conteúdo Aqui...
            $mail->Body = '<pre>' . var_export($data, true) . '</pre>';
            $mail->AltBody = '<pre>' . var_export($data, true) . '</pre>';

            //  $mail->SMTPDebug = 2;

            return $mail->send();
            //
        } catch (Exception $exc) {
            return false;
        }
    }

}
