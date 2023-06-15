<?php

namespace Magento\Helloworld\Controller\Post;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Helloworld\Model\PostFactory;

class Index extends Action
{
	protected $_postFactory;

	public function __construct(Context $context, PageFactory $pageFactory, PostFactory $postFactory)
	{
		$this->_pageFactory = $pageFactory;
		$this->_postFactory = $postFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		$post = $this->_postFactory->create();
		$collection = $post->getCollection();

		foreach($collection as $item){
			echo "<pre>";
			print_r($item->getData());
			echo "</pre>";
		}
	}
}
?>
