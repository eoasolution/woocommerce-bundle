<?php

namespace Eoasolution\WooBundle\Service;

use Automattic\WooCommerce\Client;

class ConnectionFactory implements ConnectionFactoryInterface
{
    public function makeClient(ClientConfigurationInterface $client)
    {
        return new Client(
            $client->getUrl(),
            $client->getConsumerKey(),
            $client->getConsumerSecret()  
        );
    }
}