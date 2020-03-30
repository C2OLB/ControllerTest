<?php

namespace c2\ControllerTest\Model;

use Magento\Framework\Model\AbstractModel;

/**
 * @method create(array $array)
 */
class Db extends AbstractModel
{
    protected function _construct()
    {
        /** @var Db $this */
        $this->_init("c2\ControllerTest\Model\ResourceModel\Dd");
    }
}
