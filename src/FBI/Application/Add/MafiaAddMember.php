<?php

namespace App\FBI\Application\Add;


use App\FBI\Domain\MafiaRepository;
use App\FBI\Domain\MemberRepository;

final class MafiaAddMember
{
    /**
     * @var MafiaRepository
     */
    private $mafiaRepository;

    /**
     * MafiaAddMember constructor.
     * @param MafiaRepository $mafiaRepository
     */
    public function __construct(MafiaRepository $mafiaRepository)
    {
        $this->mafiaRepository = $mafiaRepository;
    }

    /**
     * @param MemberRepository $member
     * @return MemberRepository
     */
    public function __invoke(MemberRepository $member): MemberRepository
    {
        return $this->mafiaRepository->addMember($member);

    }

}