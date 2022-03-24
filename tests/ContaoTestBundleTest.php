<?php

namespace Netkonzept\ContaoTestBundle\Tests;

use Netkonzept\ContaoTestBundle\ContaoTestBundle;
use PHPUnit\Framework\TestCase;

class ContaoTestBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new ContaoTestBundle();

        $this->assertInstanceOf('Contao\ContaoTestBundle\ContaoTestBundle', $bundle);
    }
}
