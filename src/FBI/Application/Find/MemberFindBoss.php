<?php

namespace App\FBI\Application\Find;


use App\FBI\Domain\MemberRepository;

final class MemberFindBoss
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
     * @return MemberRepository
     */
    public function __invoke(): MemberRepository
    {
        return $this->memberRepository->getBoss();

    }

}