<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\OcrLad\Tests\Fixtures\Serializer;

use WBW\Library\OcrLad\Model\Page;
use WBW\Library\OcrLad\Model\Word;
use WBW\Library\OcrLad\Serializer\DerDeserializer;

/**
 * Test DER deserializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\OcrLad\Tests\Fixtures\Serializer
 */
class TestDerDeserializer extends DerDeserializer {

    /**
     * {@inheritdoc}
     */
    public static function deserializePage(string $rawData): ?Page {
        return parent::deserializePage($rawData);
    }

    /**
     * {@inheritdoc}
     */
    public static function deserializeWord(string $rawData): ?Word {
        return parent::deserializeWord($rawData);
    }

    /**
     * {@inheritdoc}
     */
    public static function processHeaders(string $rawData): array {
        return parent::processHeaders($rawData);
    }
}
