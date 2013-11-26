<?php

namespace Spomky\FreeradiusBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('spomky_freeradius');

        $supportedDrivers = array(
            'orm',
        );

        $rootNode
            ->children()

                ->scalarNode('db_driver')
                    ->validate()
                        ->ifNotInArray($supportedDrivers)
                        ->thenInvalid('The driver %s is not supported. Please choose one of ' . json_encode($supportedDrivers))
                    ->end()
                    ->cannotBeOverwritten()
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end()

                ->scalarNode('user_class')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('user_manager')->defaultValue('spomky_freeradius.user_manager.default')->end()

                ->scalarNode('group_class')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('group_manager')->defaultValue('spomky_freeradius.group_manager.default')->end()

                ->scalarNode('accounting_class')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('accounting_manager')->defaultValue('spomky_freeradius.accounting_manager.default')->end()
            ->end();
    }
}
