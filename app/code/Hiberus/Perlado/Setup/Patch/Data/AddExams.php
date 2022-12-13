<?php

namespace Hiberus\Perlado\Setup\Patch\Data;

use Hiberus\Perlado\Api\ExamRepositoryInterface;
use Hiberus\Perlado\Api\Data\ExamInterface;
use Hiberus\Perlado\Model\ExamFactory;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\File\Csv;


class AddExams implements DataPatchInterface
{
    public function __construct(
        private readonly ModuleDataSetupInterface $moduleDataSetup,
        private readonly ExamFactory $examFactory,
        private readonly ExamRepositoryInterface $examRepository,
        protected Csv $csvProcessor

    ) {}
    public function apply()
    {
        $this->moduleDataSetup->startSetup();
        $file = "app/code/Hiberus/Perlado/nombres_apellidos.csv";

        $importData = $this->csvProcessor->setDelimiter(",")->getData($file);



        foreach ($importData as $row=> $dataRow) {
            $exam = $this->examFactory->create();
            $exam->setFirstName($dataRow[0]);
            $exam->setLastName($dataRow[1]);
            $exam->setMark(rand(0, 100)/10);

            $this->examRepository->save($exam);
        }

        $this->moduleDataSetup->endSetup();
    }

    public static function getDependencies(): array
    {
        return [];
    }

    public function getAliases(): array
    {
        return [];
    }
}
