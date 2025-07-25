<?php

namespace Learning\Popup\Model;

use Learning\Popup\Api\Data\PopupInterface;
use Learning\Popup\Model\ResourceModel\Popup as PopupResource;
use Magento\Framework\Model\AbstractModel;

class Popup extends AbstractModel implements PopupInterface
{
    const POPUP_ID   = 'popup_id';
    const NAME       = 'name';
    const CONTENT    = 'content';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const IS_ACTIVE  = 'is_active';
    const TIMEOUT    = 'timeout';

    protected function _construct(): void
    {
        $this->_eventPrefix = 'learning_popup';
        $this->_eventObject = 'popup';
        $this->_idFieldName = 'popup_id';
        $this->_init(PopupResource::class);

    }

    public function getId(): int
    {
        return (int) $this->getData(self::POPUP_ID);
    }

    public function getPopupId()
    {
        return $this->getData(self::POPUP_ID);
    }

    public function setPopupId($popupId)
    {
        return $this->setData(self::POPUP_ID, $popupId);
    }

    public function getName()
    {
        return $this->getData(self::NAME);
    }

    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    public function getContent()
    {
        return $this->getData(self::CONTENT);
    }

    public function setContent($content)
    {
        return $this->setData(self::CONTENT, $content);
    }

    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    public function getUpdatedAt()
    {
        return $this->getData(self::UPDATED_AT);
    }

    public function setUpdatedAt($updatedAt)
    {
        return $this->setData(self::UPDATED_AT, $updatedAt);
    }

    public function getIsActive()
    {
        return (int) $this->getData(self::IS_ACTIVE);
    }

    public function setIsActive($isActive)
    {
        return $this->setData(self::IS_ACTIVE, $isActive);
    }

    public function getTimeout()
    {
        return (int) $this->getData(self::TIMEOUT);
    }

    public function setTimeout($timeout)
    {
        return $this->setData(self::TIMEOUT, $timeout);
    }
}
