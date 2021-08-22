<?php


namespace Jworks\ConfigurableProduct\Plugin\Model;

class AttributeOptionProvider
{

    /**
     * {@inheritdoc}
     */
    public function afterGetAttributeOptions(\Magento\ConfigurableProduct\Model\AttributeOptionProvider $subject, array $result)
    {
        foreach ($result as &$option) {

            if(isset($option['stock_status'])