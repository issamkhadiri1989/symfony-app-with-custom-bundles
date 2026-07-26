<?php

namespace Ikhadiri\AcmeBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class AccountController
{
    public function __invoke(): Response
    {
        return new Response(__METHOD__);
    }

}