<?php


namespace Agenic\Gst\Observer;

use Magento\Framework\Event\Observer;
use Magento\Tax\Api\TaxCalculationInterface;

class GstIndia implements \Magento\Framework\Event\ObserverInterface
{

    /**
     * @inheritDoc
     */
    public function execute(Observer $observer)
    {
        // TODO: Implement execute() method.
        $quote = $observer->getQuote();
        foreach ($quote->getAllItems() as $item) {
            $product = $item->getProduct();
            $customerId = null;
            $storeId = null;
            $rate = $this->taxCalculation->getCalculatedRate(10, $customerId, $storeId);


           // $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/gst.log');
           // $logger = new \Zend\Log\Logger();
            //$logger->addWriter($writer);
            //$logger->info($product->getProductId());
            //$logger->info($product->getProductId());

        }
    }
}
