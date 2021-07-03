<?php

namespace App\FBI\Application\Add;


use App\FBI\Domain\MemberRepository;

final class MemberAddSubordinate
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
     * @param MemberRepository $member
     * @return MemberRepository
     */
    public function __invoke(MemberRepository $member): MemberRepository
    {
        return $this->memberRepository->addSubordinate($member);

    }

}