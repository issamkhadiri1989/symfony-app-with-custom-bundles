<?php

namespace Ikhadiri\LegacyAcmeBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;

class LegacyAcmeExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container): void
    {
        dump(__METHOD__, new \DateTime());
    }
}