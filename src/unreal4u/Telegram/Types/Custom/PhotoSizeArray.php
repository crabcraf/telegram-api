<?php

declare(strict_types = 1);

namespace unreal4u\Telegram\Types\Custom;

use unreal4u\Telegram\Types\PhotoSize;

/**
 * Mockup class to generate a real telegram update representation
 */
class PhotoSizeArray
{
    public $data = [];

    public function __construct(array $data = null)
    {
        if (!empty($data)) {
            foreach ($data as $id => $photo) {
                $this->data[$id] = new PhotoSize($photo);
            }
        }
    }

    /**
     * Traverses through our $data, yielding the result set
     *
     * @return \Generator
     */
    public function traverseUpdates()
    {
        foreach ($this->data as $photo) {
            yield $photo;
        }
    }
}