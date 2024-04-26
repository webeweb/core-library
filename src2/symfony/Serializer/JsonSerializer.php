<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Serializer;

use WBW\Library\Common\Model\Repository\RepositoryEventInterface;
use WBW\Library\Common\Serializer\SerializerKeys as BaseSerializerKeys;
use WBW\Library\Symfony\Model\RequestDetailInterface;

/**
 * JSON serializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Serializer
 */
class JsonSerializer {

    /**
     * Serialize a repository event.
     *
     * @param RepositoryEventInterface $model The model.
     * @return array<string,mixed> Returns the serialized model.
     */
    public static function serializeRepositoryEvent(RepositoryEventInterface $model): array {

        return [
            BaseSerializerKeys::ID            => $model->getId(),
            BaseSerializerKeys::DATE          => $model->getDate(),
            SerializerKeys::ENTITY            => $model->getEntity(),
            SerializerKeys::ENTITY_DATA       => $model->getEntityData(),
            SerializerKeys::ENTITY_ID         => $model->getEntityId(),
            BaseSerializerKeys::IP_ADDRESS    => $model->getIpAddress(),
            SerializerKeys::REQUEST_DATA_GET  => $model->getRequestDataGet(),
            SerializerKeys::REQUEST_DATA_POST => $model->getRequestDataPost(),
            SerializerKeys::REQUEST_METHOD    => $model->getRequestMethod(),
            SerializerKeys::REQUEST_ROUTE     => $model->getRequestRoute(),
            SerializerKeys::REQUEST_URL       => $model->getRequestUrl(),
            BaseSerializerKeys::TYPE          => $model->getType(),
        ];
    }

    /**
     * Serialize a request detail.
     *
     * @param RequestDetailInterface $model The model.
     * @return array<string,mixed> Returns the serialized model.
     */
    public static function serializeRequestDetail(RequestDetailInterface $model): array {

        return [
            BaseSerializerKeys::ID         => $model->getId(),
            SerializerKeys::DATA_GET       => $model->getDataGet(),
            SerializerKeys::DATA_POST      => $model->getDataPost(),
            BaseSerializerKeys::DATE       => $model->getDate(),
            BaseSerializerKeys::IP_ADDRESS => $model->getIpAddress(),
            BaseSerializerKeys::METHOD     => $model->getMethod(),
            BaseSerializerKeys::ROUTE      => $model->getRoute(),
            BaseSerializerKeys::URL        => $model->getUrl(),
            BaseSerializerKeys::USER_AGENT => $model->getUserAgent(),
            SerializerKeys::XML_HTTP       => $model->getXmlHttp(),
        ];
    }
}
