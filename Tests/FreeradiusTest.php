<?php
namespace Spomky\FreeradiusBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\Filesystem\Filesystem;

class FreeradiusTest extends WebTestCase
{
    protected static function createKernel(array $options = array())
    {
        $env = @$options['env'] ?: 'test';

        return new AppKernel($env, true);
    }

    protected function setUp()
    {
        $fs = new Filesystem();
        $fs->remove(sys_get_temp_dir().'/FOSOAuthServerBundle/');
    }

    protected function tearDown()
    {
        static::$kernel = null;
    }

    public function testService() {

        $client = static::createClient();
    }

    public function testBrowsers() {

        $client = static::createClient();
    }
}
