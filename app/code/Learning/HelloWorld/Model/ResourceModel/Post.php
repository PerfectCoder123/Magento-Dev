<?php
namespace Learning\HelloWorld\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Post extends AbstractDb
{
    protected function _construct()
    {
        // 'learning_helloworld_post' is your table name
        // 'post_id' is your primary key
        $this->_init('learning_helloworld_post', 'post_id');
    }
}
