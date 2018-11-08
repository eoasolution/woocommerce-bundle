<?php

namespace Melkco\WooBundle\Service;

interface ConnectionFactoryInterface
{
    public function makeClient(ClientConfigurationInterface $client);
}