<?php

namespace Agenic\Gst\Model\Config\Source;

        use Magento\Tax\Model\TaxClass\Source\Product;

class GstRate implements \Magento\Framework\Data\OptionSourceInterface
{

                protected $_taxClasses;
    public function __construct(
        \Magento\Tax\Model\TaxClass\Source\Product $taxClasses
    ) {
                            $this->_taxClasses = $taxClasses;
    }

    /**
     * @inheritDoc
     */
    public function toOptionArray()
    {
                                                             // TODO: Implement toOptionArray() method.
        
                                        return $this->_taxClasses->getAllOptions();

        /*return [
            ['value'=>3,'label'=>'3%'],
            ['value'=>5,'label'=>'5%'],
            ['value'=>8,'label'=>'8%'],
            ['value'=>10,'label'=>'10%'],
            ['value'=>12,'label'=>'12%'],
            ['value'=>15,'label'=>'15%'],
            ['value'=>18,'label'=>'18%'],
            ['value'=>20,'label'=>'20%'],
            ['value'=>28,'label'=>'28%']
        ];*/
    }
}
