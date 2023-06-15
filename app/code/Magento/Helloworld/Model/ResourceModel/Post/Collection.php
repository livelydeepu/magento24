<?php

namespace Magento\Helloworld\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
	protected $_idFieldName = 'post_id';
	protected $_eventPrefix = 'magento_helloworld_post_collection';
	protected $_eventObject = 'post_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Magento\Helloworld\Model\Post', 'Magento\Helloworld\Model\ResourceModel\Post');
	}
}
?>
