<?php

namespace TechRaj\DeleteOrders\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

/**
 * Class Country
 *
 * @package TechRaj\DeleteOrders\Model\Config\Source
 */
class Country implements ArrayInterface
{
    const SPECIFIC = '1';
    const ALL      = '2';

    /**
     * Return array of options as value-label pairs
     *
     * @return array Format: array(array('value' => '<value>', 'label' => '<label>'), ...)
     */
    public function toOptionArray()
    {
        return [
            ['value' => self::ALL, 'label' => __('All Countries')],
            ['value' => self::SPECIFIC, 'label' => __('Specific Countries')]
        ];
    }
}
