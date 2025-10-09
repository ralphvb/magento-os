<?php

declare(strict_types=1);

namespace RvB\CustomCheckout\Setup\Patch\Data;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Cms\Model\BlockFactory;
use Magento\Store\Model\Store;

class BlockFulfillmentStatusCreate implements \Magento\Framework\Setup\Patch\DataPatchInterface
{

    const CMS_BLOCK_IDENTIFIER = 'fulfillment_status';

    /**
     * @var ModuleDataSetupInterface
     */
    private $moduleDataSetup;

    /**
     * @var BlockFactory
     */
    private $blockFactory;

    /**
     * @param ModuleDataSetupInterface $moduleDataSetup
     * @param BlockFactory $blockFactory
     */
    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup,
        BlockFactory $blockFactory
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->blockFactory = $blockFactory;
    }

    /**
     * @inheritDoc
     */
    public function apply()
    {
        $this->moduleDataSetup->startSetup();

        $cmsBlockData = [
            'title' => 'Fulfillment Status',
            'identifier' => self::CMS_BLOCK_IDENTIFIER,
            'content' => '<style>#html-body [data-pb-style=OR9ID9N]{justify-content:flex-start;display:flex;flex-direction:column;background-position:left top;background-size:cover;background-repeat:no-repeat;background-attachment:scroll}</style><div data-content-type="row" data-appearance="contained" data-element="main"><div data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="inner" data-pb-style="OR9ID9N"><div data-content-type="text" data-appearance="default" data-element="main"><p><strong>Fulfillment status:</strong> Orders are currently shipped out within 48 hours.</p></div></div></div>',
            'is_active' => 1, // Set to 1 to enable the block
            'stores' => [Store::DEFAULT_STORE_ID], // Assign to all store views, or specific IDs
            'sort_order' => 0,
        ];

        $this->blockFactory->create()->setData($cmsBlockData)->save();

        $this->moduleDataSetup->endSetup();
    }

    /**
     * @inheritDoc
     */
    public static function getDependencies()
    {
        return []; // No dependencies for this simple example
    }

    /**
     * @inheritDoc
     */
    public function getAliases()
    {
        return [];
    }

    // Optional: Implement PatchRevertableInterface for revert logic
    public function revert()
    {
        $sampleCmsBlock = $this->blockFactory
            ->create()
            ->load(self::CMS_BLOCK_IDENTIFIER, 'identifier');
        if ($sampleCmsBlock->getId()) {
            $sampleCmsBlock->delete();
        }
    }
}
