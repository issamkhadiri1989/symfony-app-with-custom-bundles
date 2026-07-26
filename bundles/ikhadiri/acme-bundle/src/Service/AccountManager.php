<?php

namespace Ikhadiri\AcmeBundle\Service;

class AccountManager
{
    public function __construct(private RandomKeyGenerator $keyGenerator)
    {
    }

    public function doSomething(): void
    {
        dump($this->keyGenerator->generate(), __METHOD__);
    }
}