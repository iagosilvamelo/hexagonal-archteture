<?php
namespace Core;

use Ports\InputPort;
use Ports\OutputPort;

class ApplicationService implements InputPort {
    private $businessLogic;
    private $outputPort;

    public function __construct(BusinessLogic $businessLogic, OutputPort $outputPort) {
        $this->businessLogic = $businessLogic;
        $this->outputPort = $outputPort;
    }

    public function execute($input) {
        $result = $this->businessLogic->process($input);
        $this->outputPort->send($result);
    }
}
?>