<?php

namespace TechRaj\DeleteOrders\Model\Config\Source;

use Magento\Store\Model\System\Store;
use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

/**
 * Class StoreView
 *
 * @package TechRaj\DeleteOrders\Model\Config\Source
 */
class StoreView extends AbstractSource
{
    /**
     * @var Store
     */
    private $store;

    /**
     * StoreView constructor.
     *
     * @param Store $store
     */
    public function __construct(Store $store)
    {
        $this->store = $store;
    }

    /**
     * @return array
     */
    public function toOptionArray()
    {
        $this->_options[] = [
            'label' => __('All Store Views'),
            'value' => 0,
        ];

        foreach ($this->store->toOptionArray() as $item) {
            $this->_options[] = [
                'label' => __($item['label']),
                'value' => $item['value'],
            ];
        }

        return $this->_options;
    }

    /**
     * Get all options
     *
     * @return array
     */
    public function getAllOptions()
    {
        $this->_options[] = [
            'label' => __('All Store Views'),
            'value' => 0,
        ];

        foreach ($this->store->toOptionArray() as $item) {
            $this->_options[] = [
                'label' => __($item['label']),
                'value' => $item['value'],
            ];
        }

        return $this->_options;
    }
}
