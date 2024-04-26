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

use WBW\Library\Common\Serializer\SerializerKeys;
use WBW\Library\Symfony\Model\RequestDetailInterface;

/**
 * JSON serializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Serializer
 */
class JsonSerializer {

    /**
     * Serialize a request detail.
     *
     * @param RequestDetailInterface $model The model.
     * @return array<string,mixed> Returns the serialized model.
     */
    public static function serializeRequestDetail(RequestDetailInterface $model): array {

        return [
            SerializerKeys::ID         => $model->getId(),
            SerializerKeys::DATA_GET   => $model->getDataGet(),
            SerializerKeys::DATA_POST  => $model->getDataPost(),
            SerializerKeys::DATE       => $model->getDate(),
            SerializerKeys::IP_ADDRESS => $model->getIpAddress(),
            SerializerKeys::METHOD     => $model->getMethod(),
            SerializerKeys::ROUTE      => $model->getRoute(),
            SerializerKeys::URL        => $model->getUrl(),
            SerializerKeys::USER_AGENT => $model->getUserAgent(),
            SerializerKeys::XML_HTTP   => $model->getXmlHttp(),
        ];
    }
}
