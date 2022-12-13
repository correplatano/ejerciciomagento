<?php

namespace Hiberus\Perlado\Block;

use Hiberus\Perlado\Model\ResourceModel\Exam\Collection;
use Hiberus\Perlado\Model\ResourceModel\Exam\CollectionFactory;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Framework\View\Element\Template;


class Exam extends Template implements ArgumentInterface
{


    private $collectionFactory;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        CollectionFactory $collectionFactory,
        array $data = []
    )
    {

        parent::__construct($context, $data);
        $this->collectionFactory = $collectionFactory;

    }

    /**
     * @return Collection
     */
    public function getList(): Collection
    {
        return $this->collectionFactory->create();
    }

    public function getAverage(): float
    {
        $arrMark = [];
        foreach ($this->getList() as $mark) {

            array_push($arrMark, (float)$mark->getMark());
        }

        $average = array_sum($arrMark) / count($arrMark);
        return $average;
    }

    public function getBest(): float
    {
        $arrBest = [];
        foreach ($this->getList() as $mark) {

            array_push($arrBest, (float)$mark->getMark());
        }
            $best = max($arrBest);
        return $best;
    }
}
