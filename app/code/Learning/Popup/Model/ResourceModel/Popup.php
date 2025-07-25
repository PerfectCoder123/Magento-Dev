<?php

namespace Learning\Popup\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/*
 * This class connects the Db table
 */
class Popup extends AbstractDb
{
    private const string TABLE_NAME = 'learning_popup';
    private const  FIELD_ID = 'pop_id';
    protected function _construct(){
        $this->_init(self::TABLE_NAME, self::FIELD_ID);
    }
}
