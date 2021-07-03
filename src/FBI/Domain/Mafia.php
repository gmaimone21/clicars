<?php


namespace App\FBI\Domain;


class Mafia
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var Member
     */
    private $member;

    /**
     * @var string
     */
    private $name;

    /**
     * @param int $id
     */
    public function setId(int $id) {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param Member $member
     */
    public function setMember(Member $member) {
        $this->member = $member;
    }

    /**
     * @return Member
     */
    public function getMember(): Member
    {
        return $this->member;
    }

    /**
     * @param string $name
     */
    public function setName(string $name) {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

}