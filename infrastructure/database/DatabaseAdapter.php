<?php
namespace Infrastructure\Database;

use Ports\OutputPort;

class DatabaseAdapter implements OutputPort {
    public function send($data) {
        // Simula o envio de dados para o banco de dados
        echo "Enviado para o banco de dados: " . $data;
    }
}
?>