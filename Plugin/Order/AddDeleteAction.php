<?php

namespace TechRaj\DeleteOrders\Plugin\Order;

use Magento\Framework\AuthorizationInterface;
use Magento\Ui\Component\MassAction;
use TechRaj\DeleteOrders\Helper\Data;

/**
 * Class AddDeleteAction
 * @package TechRaj\DeleteOrders\Plugin\Order
 */
class AddDeleteAction
{
    /**
     * @var Data
     */
    protected $helper;

    /**
     * @var AuthorizationInterface
     */
    protected $_authorization;

    /**
     * AddDeleteAction constructor.
     *
     * @param Data $helper
     * @param AuthorizationInterface $authorization
     */
    public function __construct(
        Data $helper,
        AuthorizationInterface $authorization
    ) {
        $this->helper         = $helper;
        $this->_authorization = $authorization;
    }

    /**
     * @param MassAction $object
     * @param $result
     *
     * @return mixed
     */
    public function afterGetChildComponents(MassAction $object, $result)
    {
        if (!isset($result['techraj_delete'])) {
            return $result;
        }

        if (!$this->helper->isEnabled() || !$this->_authorization->isAllowed('Magento_Sales::delete')) {
            unset($result['techraj_delete']);
        }

        return $result;
    }
}
