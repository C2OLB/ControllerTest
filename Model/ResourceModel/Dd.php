<?php

namespace c2\ControllerTest\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Dd extends AbstractDb
{
    public function _construct()
    {
        $this->_init('ControllerTest_table', 'id_column');
        // TODO: Implement _construct() method.
    }
}
