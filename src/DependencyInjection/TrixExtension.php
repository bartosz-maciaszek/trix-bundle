<?php
namespace BM\TrixBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\ConfigurableExtension;

/**
 * @author Bartosz Maciaszek <bartosz@maciaszek.name>
 */
class TrixExtension extends ConfigurableExtension
{
    protected function loadInternal(array $config, ContainerBuilder $container)
    {
        $this->loadResources($container);
        $this->registerConfig($config, $container);
    }

    private function loadResources(ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('form.yaml');
    }

    private function registerConfig(array $config, ContainerBuilder $container)
    {
        $formType = $container->getDefinition('trix.form.type');

        if (isset($config['enabled'])) {
            $formType->addMethodCall('setEnabled', [$config['enabled']]);
        }
    }
}
