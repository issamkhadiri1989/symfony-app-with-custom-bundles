<?php

namespace Ikhadiri\LegacyAcmeBundle;

use Ikhadiri\LegacyAcmeBundle\Extension\CustomAcmeBundleExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class LegacyAcmeBundle extends Bundle
{
   public function getContainerExtension(): ?ExtensionInterface
   {
       return new CustomAcmeBundleExtension();
   }
}