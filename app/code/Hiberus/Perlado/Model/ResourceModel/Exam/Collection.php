<?php

namespace Hiberus\Perlado\Model\ResourceModel\Exam;

use Hiberus\Perlado\Model\Exam;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Hiberus\Perlado\Model\ResourceModel\Exam as ResourceModel;

class Collection extends AbstractCollection
{
    /**
     * @return void
     */
    protected function _construct(): void
    {
        $this->_init(Exam::class, ResourceModel::class);
    }
}
