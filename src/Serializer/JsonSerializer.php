<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Serializer;

use JsonSerializable;

/**
 * JSON serializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Helper
 */
class JsonSerializer {

    /**
     * Serialize an array.
     *
     * @param array<JsonSerializable|null>|null $models The models.
     * @return mixed[] Returns the serialized array.
     */
    public static function serializeArray(?array $models): array {

        if (null === $models || 0 === count($models)) {
            return [];
        }

        $output = [];

        foreach ($models as $current) {

            $array = static::serializeModel($current);
            if (null !== $array) {
                $output[] = $array;
            }
        }

        return $output;
    }

    /**
     * Serialize a model.
     *
     * @param JsonSerializable|null $model The model.
     * @return array<string,mixed>|null Returns the serialized model.
     */
    public static function serializeModel(?JsonSerializable $model): ?array {

        if (null === $model) {
            return null;
        }

        return $model->jsonSerialize();
    }
}
