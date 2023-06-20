<?php

namespace Magento\Helloworld\Controller\Event;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
	protected $_pageFactory;

	public function __construct(Context $context, PageFactory $pageFactory)
	{
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		$message = new \Magento\Framework\DataObject(array('message' => 'Magento'));
		$this->_eventManager->dispatch('magento_helloworld_show_message',['message_text' => $message]);
		echo $message->getMessage();
		exit;
	}
}
?>
