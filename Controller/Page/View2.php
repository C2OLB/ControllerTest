<?php

declare(strict_types=1);

namespace c2\ControllerTest\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Result\Page;

class View2 extends Action
{
    public function execute()
    {
      $textDisplay=new \Magento\Framework\DataObject(array('text'=>'Teetet'));
      $this->_eventManager->dispatch('c2_controllertest_display_text',['mp_text'=>$textDisplay]);
      echo $textDisplay->getText();
      exit;
    }
}
