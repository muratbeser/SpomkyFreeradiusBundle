<?php
namespace Spomky\FreeradiusBundle\Tests;

use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new \Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new \Symfony\Bundle\SecurityBundle\SecurityBundle(),

            new \Spomky\FreeradiusBundle\SpomkyFreeradiusBundle(),
        );

        return $bundles;
    }

    public function getCacheDir()
    {
        return sys_get_temp_dir().'/FreeradiusBundle/';
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config.yml');
    }
}
