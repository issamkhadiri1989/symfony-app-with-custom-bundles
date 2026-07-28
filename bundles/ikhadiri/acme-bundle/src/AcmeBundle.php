<?php

namespace Ikhadiri\AcmeBundle;

use Ikhadiri\AcmeBundle\Service\RandomKeyGenerator;
use Symfony\Component\Config\Definition\Configurator\DefinitionConfigurator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class AcmeBundle extends AbstractBundle
{
    public function loadExtension(array $config, ContainerConfigurator $configurator, ContainerBuilder $container): void
    {
        dump(__CLASS__);
        $configurator->import('../config/services.yaml');

        // configure services
        $configurator->services()
            ->get(RandomKeyGenerator::class)
            ->arg(0, $config['secret']['length'])
            ;
    }

    public function configure(DefinitionConfigurator $definition): void
    {
        dump(__METHOD__);
        $definition->rootNode()
            ->children()
                ->arrayNode('secret')
                    ->children()
                        ->integerNode('length')->end()
                    ->end()
                ->end()
            ->end();
    }
}