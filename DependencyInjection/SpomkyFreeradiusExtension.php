<?php

namespace Spomky\FreeradiusBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Processor;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;

class SpomkyFreeradiusExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $processor     = new Processor();
        $configuration = new Configuration($container->get('kernel.debug'));

        $config = $processor->processConfiguration($configuration, $configs);

        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load(sprintf('%s.xml', $config['db_driver']));

        $container->setAlias('spomky_freeradius.user_manager', $config['user_manager']);
        $container->setParameter('spomky_freeradius.user.class', $config['user_class']);

        $container->setAlias('spomky_freeradius.group_manager', $config['group_manager']);
        $container->setParameter('spomky_freeradius.group.class', $config['group_class']);

        $container->setAlias('spomky_freeradius.accounting_manager', $config['accounting_manager']);
        $container->setParameter('spomky_freeradius.accounting.class', $config['accounting_class']);
    }

    public function getAlias()
    {
        return 'spomky_freeradius';
    }
}
