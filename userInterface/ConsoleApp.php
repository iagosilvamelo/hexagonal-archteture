<?php
namespace UserInterface;

use Core\ApplicationService;
use Core\BusinessLogic;
use Infrastructure\Database\DatabaseAdapter;

class ConsoleApp {
    public function run() {
        $businessLogic = new BusinessLogic();
        $databaseAdapter = new DatabaseAdapter();
        $applicationService = new ApplicationService($businessLogic, $databaseAdapter);

        $input = "Exemplo de Arquitetura Hexagonal";
        $applicationService->execute($input);
    }
}

$app = new ConsoleApp();
$app->run();
?>