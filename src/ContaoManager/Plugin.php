<?php

namespace Netkonzept\ContaoTestBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Netkonzept\ContaoTestBundle\ContaoTestBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoTestBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
