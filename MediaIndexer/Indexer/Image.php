<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\MediaIndexer\Indexer;

use Magento\Framework\MessageQueue\PublisherInterface;

/**
 * Run images synchronization asynchronous.
 */
class Image
{
    /**
     * Queue topic name.
     */
    private const TOPIC_MEDIA_INDEXER_IMAGE = 'media.indexer.image';

    /**
     * @var PublisherInterface
     */
    private $publisher;

    /**
     * Image constructor.
     *
     * @param PublisherInterface $publisher
     */
    public function __construct(PublisherInterface $publisher)
    {
        $this->publisher = $publisher;
    }

    /**
     * Publish media files indexer message into queue.
     */
    public function execute() : void
    {
        $this->publisher->publish(self::TOPIC_MEDIA_INDEXER_IMAGE, []);
    }
}
