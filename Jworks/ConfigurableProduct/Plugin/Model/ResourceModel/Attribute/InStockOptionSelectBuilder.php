
<?php

namespace Jworks\ConfigurableProduct\Plugin\Model\ResourceModel\Attribute;

use Magento\CatalogInventory\Model\ResourceModel\Stock\Status;
use Magento\ConfigurableProduct\Model\ResourceModel\Attribute\OptionSelectBuilderInterface;
use Magento\Framework\DB\Select;

/**
 * Plugin for OptionSelectBuilderInterface to add stock status filter.
 */