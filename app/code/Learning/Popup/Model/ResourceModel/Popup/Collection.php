<?php

namespace Learning\Popup\Model\ResourceModel\Popup;

use Learning\Popup\Model\Popup;
use Learning\Popup\Model\ResourceModel\Popup as PopupResource;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct(): void
    {
        $this->_init(Popup::class, PopupResource::class);
    }
}
