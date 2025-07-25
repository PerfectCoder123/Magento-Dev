<?php
namespace Learning\HelloWorld\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            \Learning\HelloWorld\Model\Post::class,
            \Learning\HelloWorld\Model\ResourceModel\Post::class
        );
    }
}
