<?php

namespace Magento\Helloworld\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;

class ChangeMessage implements ObserverInterface
{
	public function execute(Observer $observer)
	{
		$message = $observer->getData('message_text');
		echo $message->getMessage() . " - Event </br>";
		$message->setMessage('Event launched successfully');
		return $this;
	}
}
?>
