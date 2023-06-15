<?php

namespace Magento\Helloworld\Model;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\DataObject\IdentityInterface;

class Post extends AbstractModel implements IdentityInterface
{
	const CACHE_TAG = 'magento_helloworld_post';
	protected $_cacheTag = 'magento_helloworld_post';
	protected $_eventPrefix = 'magento_helloworld_post';

	protected function _construct()
	{
		$this->_init('Magento\Helloworld\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];
		return $values;
	}
}
?>
