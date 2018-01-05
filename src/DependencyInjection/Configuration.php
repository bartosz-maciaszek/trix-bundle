<?php
namespace BM\TrixBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * @author Bartosz Maciaszek <bartosz@maciaszek.name>
 */
class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $treeBuilder
            ->root('trix')
            ->children()
                ->booleanNode('enabled')->end()
            ->end();
    }
}
