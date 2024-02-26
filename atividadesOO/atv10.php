<?php

trait LogErro {
    public function registrarLog($mensagem) {
        echo "Erro: $mensagem";
    }
}

trait LogInfo {
    public function registrarLog($mensagem) {
        echo "Info: $mensagem";
    }
}

class Registro {
    use LogErro, LogInfo {
        LogErro::registrarLog insteadof LogInfo;
        LogInfo::registrarLog as registrarLogInfo;
    }
}

$registro = new Registro();

$registro->registrarLog('Isso é um erro.');
echo "<br>";
$registro->registrarLogInfo('Isso é uma informação.');

?>
