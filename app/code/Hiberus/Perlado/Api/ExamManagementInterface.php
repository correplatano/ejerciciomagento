<?php

namespace Hiberus\Perlado\Api;

use Hiberus\Perlado\Model\ResourceModel\Exam\Collection;

interface ExamManagementInterface
{
    public function getList(): ?Collection;
}
