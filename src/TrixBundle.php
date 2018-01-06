<?php
namespace BM\TrixBundle;

use BM\TrixBundle\DependencyInjection\Compiler\ResourceCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * @author Bartosz Maciaszek <bartosz@maciaszek.name>
 */
class TrixBundle extends Bundle
{
    /**
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new ResourceCompilerPass());
    }
}
