<?php

namespace Magento\Helloworld\Block;

use Magento\Backend\Block\Widget\Form\Container;
use Magento\Backend\Block\Widget\Context;
use Magento\Framework\Registry;

class NewPost extends Container
{
    /**
     * Core registry
     *
     * @var \Magento\Framework\Registry
     */
    protected $_coreRegistry = null;
    /**
     * @param \Magento\Backend\Block\Widget\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param array $data
     */
    public function __construct(Context $context, Registry $registry, array $data = [])
    {
        $this->_coreRegistry = $registry;
        parent::__construct($context, $data);
    }

    /**
     * Initialize blog post edit block
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_objectId = 'post_id';
        $this->_blockGroup = 'Magento_Helloworld';
        $this->_controller = 'adminhtml';
        parent::_construct();
    }
}
?>
