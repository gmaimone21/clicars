<?php

namespace App\FBI\Application\Find;


use App\FBI\Domain\MafiaRepository;
use App\FBI\Domain\MemberRepository;

final class MafiaGetGodfatherFinder
{
    /**
     * @var MafiaRepository
     */
    private $mafiaRepository;

    /**
     * MafiaGetGodfatherFinder constructor.
     * @param MafiaRepository $mafiaRepository
     */
    public function __construct(MafiaRepository $mafiaRepository)
    {
        $this->mafiaRepository = $mafiaRepository;
    }

    /**
     * @return MemberRepository
     */
    public function __invoke(): MemberRepository
    {
        return $this->mafiaRepository->getGodfather();

    }

}