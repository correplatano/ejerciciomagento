<?php

namespace Hiberus\Perlado\Model\ResourceModel;

use Hiberus\Perlado\Api\Data\ExamInterface;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Framework\Model\ResourceModel\Db\Context;

class Exam extends AbstractDb
{
    /**
     * @param Context $context
     * @param $connectionName
     */
    public function __construct(
        Context $context,
                $connectionName = null
    ) {
        parent::__construct($context, $connectionName);
    }

    /**
     * @return void
     */
    protected function _construct(): void
    {
        $this->_init(ExamInterface::MAIN_TABLE, ExamInterface::ENTITY_ID);
    }

    /**
     * {@inheritdoc}
     */
    public function save(AbstractModel $object) : self
    {
        $object->setHasDataChanges(true);
        return parent::save($object);
    }
}
