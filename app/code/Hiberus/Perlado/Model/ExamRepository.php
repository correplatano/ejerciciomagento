<?php

namespace Hiberus\Perlado\Model;

use Hiberus\Perlado\Api\ExamRepositoryInterface;
use Hiberus\Perlado\Api\Data\ExamInterface;
use Hiberus\Perlado\Model\ExamFactory;
use Hiberus\Perlado\Model\ResourceModel\Exam as ResourceModel;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;

class ExamRepository implements ExamRepositoryInterface
{
    /**
     * @param ResourceModel $resource
     * @param ExamFactory $examFactory
     */
    public function __construct(
        private readonly ResourceModel $resource,
        private readonly ExamFactory $examFactory
    ) {}

    /**
     * @param string $lastname
     * @return ExamInterface|null
     * @throws NoSuchEntityException
     */
    public function get(string $lastname): ?ExamInterface
    {
        $exam = $this->examFactory->create();
        $this->resource->load($exam, $lastname, ExamInterface::LASTNAME);

        if (!$exam->getId()) {
            throw new NoSuchEntityException(\__('Course with this name does not exist'));
        }

        return $exam;
    }

    /**
     * @param int|string $entityId
     * @return ExamInterface|null
     * @throws NoSuchEntityException
     */
    public function getById(int|string $entityId): ?ExamInterface
    {
        $exam = $this->examFactory->create();
        $this->resource->load($exam, $entityId);

        if (!$exam->getId()) {
            throw new NoSuchEntityException(\__('Course with this ID does not exist'));
        }

        return $exam;
    }

    /**
     * @param ExamInterface $exam
     * @return bool
     * @throws CouldNotSaveException
     */
    public function save(ExamInterface $exam): bool
    {
        try {
            $this->resource->save($exam);
        } catch (\Throwable $exception) {
            throw new CouldNotSaveException(\__($exception->getMessage()));
        }

        return true;
    }
}
