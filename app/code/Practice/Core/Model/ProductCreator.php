<?php
namespace Practice\Example\Model;

use Magento\Catalog\Model\ProductFactory;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Store\Model\StoreManagerInterface;

class ProductCreator
{
    protected $productFactory;
    protected $productRepository;
    protected $storeManager;

    public function __construct(
        ProductFactory $productFactory,
        ProductRepositoryInterface $productRepository,
        StoreManagerInterface $storeManager
    ) {
        $this->productFactory = $productFactory;
        $this->productRepository = $productRepository;
        $this->storeManager = $storeManager;
    }

    public function createSimpleProduct()
    {
        // 🔧 Step 1: Use factory to create new product object
        $product = $this->productFactory->create();

        // 🛠️ Step 2: Set basic product data
        $product->setSku('my-custom-sku');
        $product->setName('My Custom Product');
        $product->setAttributeSetId(4); // Default attribute set
        $product->setStatus(1);
        $product->setWeight(1.0);
        $product->setVisibility(4); // Catalog, Search
        $product->setTaxClassId(0); // None
        $product->setTypeId('simple');
        $product->setPrice(99.99);

        $product->setWebsiteIds([$this->storeManager->getStore()->getWebsiteId()]);
        $product->setStockData([
            'use_config_manage_stock' => 1,
            'qty' => 100,
            'is_qty_decimal' => 0,
            'is_in_stock' => 1,
        ]);

        // 💾 Step 3: Save the product
        try {
            $this->productRepository->save($product);
            return "Product Created: " . $product->getId();
        } catch (\Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
}
