<?php

namespace Hiberus\Perlado\Model;

use Hiberus\Perlado\Api\Data\ExamInterface;
use Hiberus\Perlado\Model\ResourceModel\Exam as ResourceModel;
use Magento\Framework\Model\AbstractExtensibleModel;

class Exam extends AbstractExtensibleModel implements ExamInterface
{
    /**
     * @return void
     */
    protected function _construct(): void
    {
        $this->_init(ResourceModel::class);
    }

    /**
     * @return string | null
     */
    public function getId(): ?string
    {
        return $this->getData(self::ENTITY_ID);
    }

    public function getFirstName(): ?string
    {
        return $this->getData(self::FIRSTNAME);
    }

    public function setFirstName(string $firstname): ExamInterface
    {
        return $this->setData(self::FIRSTNAME, $firstname);
    }

    public function getLastName(): ?string
    {
        return $this->getData(self::LASTNAME);
    }

    public function setLastName(string $lastname): ExamInterface
    {
        return $this->setData(self::LASTNAME, $lastname);
    }

    public function getMark(): ?float
    {
        return $this->getData(self::MARK);
    }

    public function setMark(float|string|null $mark): ExamInterface
    {
        return $this->setData(self::MARK, $mark);
    }
}
