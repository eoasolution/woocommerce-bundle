<?php

namespace Melkco\WooBundle\Service;

interface ClientConfigurationInterface
{
    public function getUrl();

    public function getConsumerKey();

    public function getConsumerSecret();
}