<?php

namespace App\Controller;

use Ikhadiri\AcmeBundle\Service\AccountManager;
use Ikhadiri\AcmeBundle\Service\RandomKeyGenerator;
use Ikhadiri\AcmeBundle\Service\Twitter;
use Ikhadiri\LegacyAcmeBundle\Service\Secret\SecretGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route(path: '/', name: 'app_homepage')]
class IndexController
{
    public function __invoke(AccountManager $manager, RandomKeyGenerator $randomKeyGenerator, SecretGenerator $secretGenerator): Response
    {
        $manager->doSomething();
        dump($randomKeyGenerator, $secretGenerator->generate());
        die;
        return new Response(__METHOD__);
    }
}
