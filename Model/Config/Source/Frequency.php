<?php

namespace TechRaj\DeleteOrders\Model\Config\Source;

/**
 * Class Frequency
 *
 * @package TechRaj\DeleteOrders\Model\Config\Source
 */
class Frequency extends \Magento\Cron\Model\Config\Source\Frequency
{
    const DISABLE = 0;

    /**
     * @return array
     */
    public function toOptionArray()
    {
        parent::toOptionArray();

        array_unshift(self::$_options, ['label' => __('Disable'), 'value' => self::DISABLE]);

        return self::$_options;
    }
}
