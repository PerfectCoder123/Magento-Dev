<?php

namespace Learning\Popup\Api\Data;

interface PopupInterface
{

    public function getPopupId() : int;
    public function setPopupId($popupId) : void;

    public function getName() : string;

    public function setName($name);

    public function getContent();

    public function setContent($content);

    public function getCreatedAt();

    public function setCreatedAt($createdAt);

    public function getUpdatedAt();

    public function setUpdatedAt($updatedAt);

    public function getIsActive();

    public function setIsActive($isActive);

    public function getTimeout();

    public function setTimeout($timeout);
}
