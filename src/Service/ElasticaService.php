<?php

namespace App\Service;

use Elastica\Client;

/**
 * Class ElasticaService
 *
 * Class used to wrap elastica calls
 *
 * @package App\Service
 */
class ElasticaService
{

    private $elasticaClient;

    public function getClient () {
        $this->elasticaClient = new \Elastica\Client(array(
            'host' => '127.0.0.1',
            'port' => 12345
        ));
    }

    /**
     * Send a request to elasticSearch using elastica
     */
    public function sendRequest(  ) {

    }

}