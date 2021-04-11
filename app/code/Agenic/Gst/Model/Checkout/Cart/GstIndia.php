<?php


namespace Agenic\Gst\Model\Checkout\Cart;

class GstIndia
{
    protected $quote;
    protected $helperData;

    public function __construct(
        \Magento\Checkout\Model\Session $checkoutSession,
        \Agenic\Gst\Helper\Data $helperData
    ) {
            $this->quote = $checkoutSession->getQuote();
                        $this->helperData = $helperData;
    }
    public function beforeAddProduct(\Magento\Checkout\Model\Cart $subject, $productInfo, $requestInfo = null)
    {
                $gstMinPrice = $this->helperData->getGstFieldConfig('default_minprice');
                        $DefaultTaxClassId = $this->helperData->getGstFieldConfig('default_gst');
                    $maxTaxClassId = $this->helperData->getGstFieldConfig('gstrate_threashold');

        if ($productInfo->getPrice()>= $gstMinPrice) {
                        $productInfo->setTaxClassId($maxTaxClassId);
        } else {
             $productInfo->setTaxClassId($DefaultTaxClassId);
        }
                return [$productInfo, $requestInfo];
    }
}
