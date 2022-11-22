<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\System\Serializer;

use WBW\Library\Serializer\SerializerKeys as BaseSerializerKeys;
use WBW\Library\System\Model\MemoryInterface;
use WBW\Library\System\Model\NetworkInterface;

/**
 * JSON serializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Serializer
 */
class JsonSerializer {

    /**
     * Serialize a memory.
     *
     * @param MemoryInterface $model The model.
     * @return array Returns the serialized model.
     */
    public static function serializeMemory(MemoryInterface $model): array {
        return $model->getValues();
    }

    /**
     * Serializes a network.
     *
     * @param NetworkInterface $model The model.
     * @return array Returns the serialized model.
     */
    public static function serializeNetwork(NetworkInterface $model): array {

        return [
            SerializerKeys::DNS          => $model->getDns(),
            SerializerKeys::GATEWAY      => $model->getGateway(),
            BaseSerializerKeys::HOSTNAME => $model->getHostname(),
        ];
    }
}
