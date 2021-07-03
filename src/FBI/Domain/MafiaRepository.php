<?php

namespace App\FBI\Domain;

interface MafiaRepository
{
    /**
     * Initialize the object
     *
     * @param MemberRepository $godfather
     */
    public function __construct(MemberRepository $godfather);

    /**
     * Get the godfather of the organisation
     * @return MemberRepository
     */
    public function getGodfather(): MemberRepository;

    /**
     * Add new member to the net
     *
     * @param MemberRepository $member
     *
     * @return MemberRepository|null
     */
    public function addMember(MemberRepository $member): ?MemberRepository;

    /**
     * Get a member by id
     *
     * @param int $id
     *
     * @return MemberRepository|null
     */
    public function getMember(int $id): ?MemberRepository;

    /**
     * Put a member in prison
     *
     * @param MemberRepository $member
     *
     * @return bool
     */
    public function sendToPrison(MemberRepository $member): bool;

    /**
     * Release a member from the prison
     *
     * @param MemberRepository $member
     *
     * @return bool
     */
    public function releaseFromPrison(MemberRepository $member): bool;

    /**
     * Find bosses who have more than required number of subordinates
     *
     * @param int $minimumSubordinates
     *
     * @return MemberRepository[]
     */
    public function findBigBosses(int $minimumSubordinates): array;

    /**
     * Compare two members between them and return the one with the highest level or null if they are equals
     *
     * @param MemberRepository $memberA
     * @param MemberRepository $memberB
     *
     * @return MemberRepository|null
     */
    public function compareMembers(MemberRepository $memberA, MemberRepository $memberB): ?MemberRepository;

}