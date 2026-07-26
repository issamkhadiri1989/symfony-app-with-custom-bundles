<?php

namespace Ikhadiri\AcmeBundle\Service;

class RandomKeyGenerator
{
    public function __construct(private int $length)
    {
    }

    public function generate(): string
    {
        return \bin2hex(\random_bytes($this->length));
    }
}