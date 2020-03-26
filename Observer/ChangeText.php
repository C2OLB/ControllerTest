<?php

namespace c2\ControllerTest\Observer;

use Magento\Framework\Event\Observer;

class ChangeText implements \Magento\Framework\Event\ObserverInterface
{
    public function execute(Observer $observer)
    {
        $displayText = $observer->getData('mp_text');
        echo $displayText->getText() . " - Event </br>";
        $displayText->setText('execute eevent successfully.');

        return $this;
    }
}
