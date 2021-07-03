<?php

namespace App\FBI\Application\Find;


use App\FBI\Domain\MafiaRepository;
use App\FBI\Domain\MemberRepository;

final class MafiaGetMemberFinder
{
    /**
     * @var MafiaRepository
     */
    private $mafiaRepository;

    /**
     * MafiaGetMemberFinder constructor.
     * @param MafiaRepository $mafiaRepository
     */
    public function __construct(MafiaRepository $mafiaRepository)
    {
        $this->mafiaRepository = $mafiaRepository;
    }

    /**
     * @param int $id
     * @return MemberRepository
     */
    public function __invoke(int $id): MemberRepository
    {
        return $this->mafiaRepository->getMember($id);

    }

}