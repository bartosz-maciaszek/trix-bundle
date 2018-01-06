<?php
namespace BM\TrixBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * @author Bartosz Maciaszek <bartosz@maciaszek.name>
 */
class ResourceCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        if ($container->hasParameter('twig.form.resources')) {
            $container->setParameter('twig.form.resources', array_merge(
                ['@Trix/Form/trix_widget.html.twig'],
                $container->getParameter('twig.form.resources')
            ));
        }
    }
}
