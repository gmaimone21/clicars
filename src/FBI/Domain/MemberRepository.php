<?php

namespace App\FBI\Domain;

interface MemberRepository
{
    /**
     * Initialize the object
     *
     * @param int $id
     * @param int $age
     */
    public function __construct(int $id, int $age);

    /**
     * Get member id
     * @return int
     */
    public function getId(): int;

    /**
     * Get member age
     * @return int
     */
    public function getAge(): int;

    /**
     * Add a new subordinate
     *
     * @param MemberRepository $subordinate
     *
     * @return $this
     */
    public function addSubordinate(MemberRepository $subordinate): MemberRepository;

    /**
     * Remove a subordinate
     *
     * @param MemberRepository $subordinate
     *
     * @return MemberRepository|null
     */
    public function removeSubordinate(MemberRepository $subordinate): ?MemberRepository;

    /**
     * Get the list of the subordinates
     * @return MemberRepository[]
     */
    public function getSubordinates(): array;

    /**
     * Get his boss
     * @return MemberRepository|null
     */
    public function getBoss(): ?MemberRepository;

    /**
     * Set boss of the member
     *
     * @param MemberRepository|null $boss
     *
     * @return $this
     */
    public function setBoss(?MemberRepository $boss): MemberRepository;

}