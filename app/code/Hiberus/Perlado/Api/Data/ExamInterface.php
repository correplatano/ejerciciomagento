<?php

namespace Hiberus\Perlado\Api\Data;

interface ExamInterface
{
    public const MAIN_TABLE = 'hiberus_exam';
    public const ENTITY_ID = 'id_exam';
    public const FIRSTNAME = 'firstname';
    public const LASTNAME = 'lastname';
    public const MARK = 'mark';

    /**
     * @return string|null
     */
    public function getId(): ?string;

    /**
     * @return string|null
     */
    public function getFirstName(): ?string;

    /**
     * @param string $firstname
     * @return $this
     */
    public function setFirstName(string $firstname): self;

    /**
     * @return string|null
     */
    public function getLastName(): ?string;

    /**
     * @param string $lastname
     * @return $this
     */
    public function setLastName(string $lastname): self;

    /**
     * @return float|null
     */
    public function getMark(): ?float;

    /**
     * @param int|string|null $mark
     * @return $this
     */
    public function setMark(float|string|null $mark): self;
}
