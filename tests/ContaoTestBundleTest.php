<?php

declare(strict_types=1);

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace Netkonzept\ContaoTestBundle\Tests;

use Netkonzept\TestBundle\ContaoTestBundle;
use PHPUnit\Framework\TestCase;

class ContaoTestBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new ContaoTestBundle();

        $this->assertInstanceOf('Contao\TestBundle\ContaoTestBundle', $bundle);
    }
}
