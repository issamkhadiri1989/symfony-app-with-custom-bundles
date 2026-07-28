<?php

namespace Ikhadiri\LegacyAcmeBundle\Service\Secret;

class SecretGenerator
{
    private const SIZE = 16;

    public function generate(): string
    {
        return \bin2hex(\random_bytes(self::SIZE));
    }
}