<?php

namespace Magento\Helloworld\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeData implements UpgradeDataInterface
{
	protected $_postFactory;

	public function __construct(\Magento\Helloworld\Model\PostFactory $postFactory)
	{
		$this->_postFactory = $postFactory;
	}

	public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		if (version_compare($context->getVersion(), '1.2.0', '<')) {
			$data = [
				'title' => "Magento Modules",
				'content' => "This post is all about Magento modules.",
			];
			$post = $this->_postFactory->create();
			$post->addData($data)->save();
		}
        else if (version_compare($context->getVersion(), '1.3.0', '<')) {
            $installer->getConnection();
            $installer->dropTable($installer->getTableName('magento_helloworld_post'));
        }
	}
}
?>
