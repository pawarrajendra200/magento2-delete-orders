<?php


namespace TechRaj\DeleteOrders\Block\Adminhtml\System\Config;

use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\Data\Form\Element\AbstractElement;

/**
 * Class Manually
 *
 * @package TechRaj\DeleteOrders\Block\Adminhtml\System\Config
 */
class Manually extends Field
{
    protected $_template = 'TechRaj_DeleteOrders::manually.phtml';

    /**
     * @param AbstractElement $element
     *
     * @return string
     * @SuppressWarnings(Unused)
     */
    protected function _getElementHtml(AbstractElement $element)
    {
        return $this->toHtml();
    }
}
