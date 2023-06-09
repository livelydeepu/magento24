<?php
/**
 * BSS Commerce Co.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://bsscommerce.com/Bss-Commerce-License.txt
 *
 * @category   BSS
 * @package    Bss_Simpledetailconfigurable
 * @author     Extension Team
 * @copyright  Copyright (c) 2017-2022 BSS Commerce Co. ( http://bsscommerce.com )
 * @license    http://bsscommerce.com/Bss-Commerce-License.txt
 */
namespace Bss\Quickview\Plugin\Catalog\Controller\Product;

use Magento\Framework\App\Action\Context;

class View
{
    /**
     * @var Context
     */
    protected $context;

    /**
     * @var \Bss\Quickview\Helper\Data
     */
    protected $quickViewBss;

    /**
     * View construct.
     *
     * @param Context $context
     * @param \Bss\Quickview\Helper\Data $quickViewBss
     */
    public function __construct(
        Context $context,
        \Bss\Quickview\Helper\Data $quickViewBss
    ) {
        $this->context = $context;
        $this->quickViewBss = $quickViewBss;
    }

    /**
     * Get url quick view.
     *
     * @param \Bss\Simpledetailconfigurable\Plugin\Catalog\Controller\Product\View $subject
     * @param string $result
     * @param \Magento\Catalog\Model\Product|mixed $product
     * @param string $paramRedirect
     * @return string
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function afterGetUrlRedirect($subject, $result, $product, $paramRedirect)
    {
        $params = $this->context->getRequest();
        if ($params->getControllerModule() === 'Bss_Quickview') {
            return $this->quickViewBss->getUrl() . 'id/' . $product->getId() . $paramRedirect;
        }
        return $result;
    }
}
