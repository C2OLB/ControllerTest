<?php

namespace c2\ControllerTest\Setup\Patch\Data;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\Patch\PatchRevertableInterface;
use c2\ControllerTest\Model\Db;
use c2\ControllerTest\Model\ResourceModel\Dd;

class AddData implements DataPatchInterface, PatchRevertableInterface
{
    /**
     * @var ModuleDataSetupInterface
     */
    private $moduleDataSetup;
    private $contactDetailsFactory;
    private $contactDetailsResource;

    /**
     * @param Db $contactDetailsFactory
     * @param Dd $contactDetailsResource
     * @param ModuleDataSetupInterface $moduleDataSetup
     */
    public function __construct(
        Db $contactDetailsFactory,
        Dd $contactDetailsResource,
        ModuleDataSetupInterface $moduleDataSetup
    ) {
        $this->contactDetailsFactory = $contactDetailsFactory;
        $this->contactDetailsResource = $contactDetailsResource;
        $this->moduleDataSetup = $moduleDataSetup;
    }

    /**
     * {@inheritdoc}
     * @throws \Exception
     */
    public function apply()
    {
        $this->moduleDataSetup->startSetup();
        $contactDTO=$this->contactDetailsFactory->create(['setup'=>$this->moduleDataSetup]);
        $contactDTO->setSeverity('2')->setTitle('1gh2')->setTimeOccurred('34345');
        $this->contactDetailsResource->save($contactDTO);
        $this->moduleDataSetup->endSetup();
    }
    public static function getDependencies()
    {
        return[];
        // TODO: Implement getDependencies() method.
    }
    public static function getVersion()
    {
        return'1.0.1';
    }
    public function getAliases()
    {
        return[];
        // TODO: Implement getAliases() method.
    }

    /**
     * @inheritDoc
     */
    public function revert()
    {
        // TODO: Implement revert() method.
    }
}
