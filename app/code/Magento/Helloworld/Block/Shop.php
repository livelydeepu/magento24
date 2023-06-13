<?php

namespace Magento\Helloworld\Block;

class Shop extends \Magento\Framework\View\Element\Template
{
    protected $_storeManager;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Store\Model\StoreManagerInterface $storeManager, array $data= [])
    {
        $this->_storeManager = $storeManager;
        parent::__construct($context, $data);
    }

    /**
     * Get store identifier
     *
     * @return int
     */
    public function getStoreId()
    {
        return $this->_storeManager->getStore()->getId();
    }

    /**
     * Get website identifier
     *
     * @return string|int|null
     */
    public function getWebsiteId()
    {
        return $this->_storeManager->getStore()->getWebsiteId();
    }

    /**
     * Get Store code
     *
     * @return string
     */
    public function getStoreCode()
    {
        return $this->_storeManager->getStore()->getCode();
    }

    /**
     * Get Store code
     *
     * @return string
     */
    public function getStoreName()
    {
        return $this->_storeManager->getStore()->getName();
    }

    /**
     * Get Store code
     *
     * @return string
     */
    public function getStoreUrl($fromStore = true)
    {
        return $this->_storeManager->getStore()->getCurrentUrl($fromStore);
    }

    /**
     * Get Store code
     *
     * @return string
     */
    public function isStoreActive()
    {
        return $this->_storeManager->getStore()->isActive();
    }
}
?>
