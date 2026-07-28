<?php

namespace Ikhadiri\LegacyAcmeBundle\Extension;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class CustomAcmeBundleExtension extends Extension
{
    /**
     * @param array $configs
     * @param ContainerBuilder $container
     *
     * @return void
     *
     * @throws \Exception
     */
    public function load(array $configs, ContainerBuilder $container): void
    {
        $loader = new YamlFileLoader(
            container: $container,
            locator: new FileLocator(__DIR__ . '/../../config'),
        );

        $loader->load('services.yaml');
    }

    public function getAlias(): string
    {
        return 'legacy_acme_bundle';
    }
}