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
use WBW\Library\System\Model\DiskInterface;
use WBW\Library\System\Model\MemoryInterface;
use WBW\Library\System\Model\NetworkCardInterface;
use WBW\Library\System\Model\NetworkInterface;
use WBW\Library\System\Model\OperatingSystemInterface;

/**
 * JSON serializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Serializer
 */
class JsonSerializer {

    /**
     * Serializes a disk.
     *
     * @param DiskInterface $model The model.
     * @return array Returns the serialized model.
     */
    public static function serializeDisk(DiskInterface $model): array {

        return [
            SerializerKeys::AVAILABLE => $model->getAvailable(),
            SerializerKeys::FS        => $model->getFs(),
            SerializerKeys::MOUNT     => $model->getMount(),
            BaseSerializerKeys::NAME  => $model->getName(),
            SerializerKeys::PERCENT   => $model->getPercent(),
            SerializerKeys::USED      => $model->getUsed(),
        ];
    }

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

    /**
     * Serializes a network card.
     *
     * @param NetworkCardInterface $model The model.
     * @return array Returns the serialized model.
     */
    public static function serializeNetworkCard(NetworkCardInterface $model): array {

        return [
            SerializerKeys::DUPLEX   => $model->getDuplex(),
            SerializerKeys::IPV4     => $model->getIpv4(),
            SerializerKeys::IPV6     => $model->getIpv6(),
            SerializerKeys::MAC      => $model->getMac(),
            BaseSerializerKeys::NAME => $model->getName(),
            SerializerKeys::SPEED    => $model->getSpeed(),
            SerializerKeys::STATUS   => $model->getStatus(),
        ];
    }

    /**
     * Serializes an operating system.
     *
     * @param OperatingSystemInterface $model The model.
     * @return array Returns the serialized model.
     */
    public static function serializeOperatingSystem(OperatingSystemInterface $model): array {

        return [
            SerializerKeys::CODENAME        => $model->getCodename(),
            BaseSerializerKeys::DESCRIPTION => $model->getDescription(),
            BaseSerializerKeys::ID          => $model->getId(),
            SerializerKeys::RELEASE         => $model->getRelease(),
        ];
    }
}
