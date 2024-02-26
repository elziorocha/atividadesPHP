<?php

trait Mensagens {
    public function enviarMensagem($destinatario, $mensagem) {
        echo "Mensagem enviada para $destinatario: $mensagem";
    }
}

class EmailSender {
    use Mensagens;

    public function enviarEmail($para, $assunto, $corpo) {
        $mensagem = "Assunto: $assunto $corpo";
        $this->enviarMensagem($para, $mensagem);
    }
}

class SMSSender {
    use Mensagens;

    public function enviarSMS($para, $texto) {
        $this->enviarMensagem($para, $texto);
    }
}

$emailSender = new EmailSender();
$emailSender->enviarEmail('juninho321@email.com /', 'coe junin', 'bora mid');

echo "<br>";

$smsSender = new SMSSender();
$smsSender->enviarSMS('+55123456789 /', 'bora pancar');

?>