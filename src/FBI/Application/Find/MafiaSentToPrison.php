<?php

namespace App\FBI\Application\Find;


use App\FBI\Domain\MafiaRepository;
use App\FBI\Domain\MemberRepository;

final class MafiaSentToPrison
{
    /**
     * @var MafiaRepository
     */
    private $mafiaRepository;

    /**
     * MafiaSentToPrison constructor.
     * @param MafiaRepository $mafiaRepository
     */
    public function __construct(MafiaRepository $mafiaRepository)
    {
        $this->mafiaRepository = $mafiaRepository;
    }

    /**
     * @param MemberRepository $member
     * @return void
     */
    public function __invoke(MemberRepository $member): void
    {
        $this->mafiaRepository->sendToPrison($member);
    }
}