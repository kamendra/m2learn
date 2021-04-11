<?php


namespace Agenic\Gst\Helper;

use Magento\Store\Model\ScopeInterface;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    const XML_PATH_GST = 'gst/';

    public function getGstConfig($field, $storeId = null)
    {
        return $this->scopeConfig->getValue($field, ScopeInterface::SCOPE_STORE, $storeId);
    }

    public function getGstFieldConfig($code, $storeId = null)
    {
        return $this->getGstConfig(self::XML_PATH_GST . 'general/' . $code, $storeId);
    }
}
