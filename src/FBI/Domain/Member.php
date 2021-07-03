<?php


namespace App\FBI\Domain;


class Member
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $age;

    /**
     * @var Member
     */
    private $subordinates;

    /**
     * @var Member
     */
    private $boss;

   /**
     * @var bool
     */
    private $onJail;

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
     * @param int $age
     */
    public function setAge(int $age) {
        $this->age = $age;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param Member $boss
     */
    public function setBoss(Member $boss) {
        $this->boss = $boss;
    }

    /**
     * @return Member
     */
    public function getBoss(): Member
    {
        return $this->boss;
    }

    /**
     * @param Member $subordinates
     */
    public function setSubordinates(Member $subordinates) {
        $this->subordinates = $subordinates;
    }

    /**
     * @return Member
     */
    public function getSubordinates(): Member
    {
        return $this->subordinates;
    }

    /**
     * @param bool $onJail
     */
    public function setOnJail(bool $onJail) {
        $this->onJail = $onJail;
    }

    /**
     * @return bool
     */
    public function getOnJail(): bool
    {
        return $this->onJail;
    }
}