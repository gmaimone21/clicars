<?php

namespace App\FBI\Application\Find;


use App\FBI\Domain\MemberRepository;

final class MemberFindBossBySubordinate
{
    /**
     * @var MemberRepository
     */
    private $memberRepository;

    /**
     * MafiaAddMember constructor.
     * @param MemberRepository $memberRepository
     */
    public function __construct(MemberRepository $memberRepository)
    {
        $this->memberRepository = $memberRepository;
    }

    /**
     * @return MemberRepository[]
     */
    public function __invoke(): array
    {
        return $this->memberRepository->getSubordinates();

    }

}