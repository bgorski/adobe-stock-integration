<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\MediaGalleryUi\Ui\Component\Listing\Columns\Layout;

use Magento\Framework\Data\OptionSourceInterface;

/**
 * Image source filter options
 */
class Options implements OptionSourceInterface
{
    protected $_options;

    public function __construct($options = [])
    {
        $this->_options = $options;
    }

    /**
     * @inheritdoc
     */
    public function toOptionArray(): array
    {
        return $this->_options;
    }
}
