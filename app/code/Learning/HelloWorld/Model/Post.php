<?php
namespace Learning\HelloWorld\Model;

use Magento\Framework\Model\AbstractModel;

class Post extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\Learning\HelloWorld\Model\ResourceModel\Post::class);
    }
}
