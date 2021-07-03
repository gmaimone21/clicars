<?php

namespace App\FBI\Application\Controller;

use App\FBI\Domain\MemberRepository;
use App\FBI\Shared\Domain\Utils;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends AbstractController
{
    /**
     * this is an example of the different endpoints to be consumed by frontend
     *
     * @Route("/member/new/{age}")
     * @param string $age
     * @return true
     */
    public function getBeerByFoodPairingAction(string $age): bool
    {
        return true;
    }

}