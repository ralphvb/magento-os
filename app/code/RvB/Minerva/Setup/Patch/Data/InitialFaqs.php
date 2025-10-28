<?php

declare(strict_types=1);

namespace RvB\Minerva\Setup\Patch\Data;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use RvB\Minerva\Model\ResourceModel\Faq;

class InitialFaqs implements DataPatchInterface
{
    /** @var ModuleDataSetupInterface */
    protected ModuleDataSetupInterface $moduleDataSetup;

    /**
     * @param ModuleDataSetupInterface $moduleDataSetup
     */
    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
    }

    /**
     * @return array
     */
    public static function getDependencies(): array
    {
        return [];
    }

    /**
     * @return array
     */
    public function getAliases(): array
    {
        return [];
    }

    public function apply(): self
    {
        $connection = $this->moduleDataSetup->getConnection();

        // Start a database transaction
        $connection->beginTransaction();

        try {
            $data = [
                ['question' => 'What is your best selling item?', 'answer' => 'The item you buy!', 'is_published' => 1],
                ['question' => 'What is your customer support number?', 'answer' => '212-867-5309. Ask for Ralph!', 'is_published' => 1],
                ['question' => 'When will I get my order?', 'answer' => 'When it goes delivered, silly!', 'is_published' => 0]
            ];

            $connection->insertMultiple(
                Faq::MAIN_TABLE,
                $data
            );

            // Commit the transaction if everything went well
            $connection->commit();
        } catch (\Exception $e) {
            // Rollback the transaction if something failed
            $connection->rollBack();
            throw $e;
        }

        return $this;
    }
}
