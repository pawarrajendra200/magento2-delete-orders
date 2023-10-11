<?php

namespace TechRaj\DeleteOrders\Plugin\Model;

use TechRaj\DeleteOrders\Helper\Data;
use Magento\Sales\Model\Order as CoreOrder;

/**
 * Class Order
 * @package TechRaj\DeleteOrders\Plugin\Model
 */
class Order
{
    /**
     * @var Data
     */
    protected $helper;

    /**
     * Order constructor.
     * @param Data $helper
     */
    public function __construct(
        Data $helper
    ) {
        $this->helper = $helper;
    }

    /**
     * @param CoreOrder $order
     * @return array
     */
    public function beforeUnhold(CoreOrder $order)
    {
        if (!$this->helper->isEnabled()) {
            return [];
        }

        if ($order->getStatus() !== $order->getState() && $order->getStatus() === CoreOrder::STATE_HOLDED) {
            $order->setState(CoreOrder::STATE_HOLDED);
        }

        return [];
    }
}
