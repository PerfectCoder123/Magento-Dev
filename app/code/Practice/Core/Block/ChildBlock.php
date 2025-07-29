<?php
namespace Practice\Core\Block;

class ChildBlock extends \Magento\Framework\View\Element\Template
{

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        public \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfigInterface,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    public function getMessage()
    {
        return $this->scopeConfigInterface->getValue('vendor_section/general/custom_text', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}
