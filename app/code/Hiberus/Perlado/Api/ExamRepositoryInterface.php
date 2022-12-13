<?php

namespace Hiberus\Perlado\Api;

use Hiberus\Perlado\Api\Data\ExamInterface;

interface ExamRepositoryInterface
{
    /**
     * @param string $lastname
     * @return ExamInterface|null
     */
    public function get(string $lastname): ?ExamInterface;

    /**
     * @param string | int $entityId
     * @return ExamInterface|null
     */
    public function getById(string | int $entityId): ?ExamInterface;

    /**
     * @param ExamInterface $exam
     * @return bool
     */
    public function save(ExamInterface $exam): bool;

}
