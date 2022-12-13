<?php

namespace Hiberus\Perlado\Model;
use Hiberus\Perlado\Api\ExamManagementInterface;
use Hiberus\Perlado\Model\ResourceModel\Exam\Collection;
use Hiberus\Perlado\Model\ResourceModel\Exam\CollectionFactory;

class ExamManagement implements ExamManagementInterface
{
    /**
     * @param CollectionFactory $collectionFactory
     */
    public function __construct(
        private readonly CollectionFactory $collectionFactory
    ) {}

    /**
     * @return Collection
     */
    public function getList(): Collection
    {
        return $this->collectionFactory->create();
    }

}
