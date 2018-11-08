<?php

namespace Eoasolution\WooBundle\Service;

interface ConnectionFactoryInterface
{
    public function makeClient(ClientConfigurationInterface $client);
}