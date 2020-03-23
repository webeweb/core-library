<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Fixtures\ThirdParty\OcrLad\Serializer;

use WBW\Library\Core\ThirdParty\OcrLad\Serializer\DerDeserializer;

/**
 * Test DER deserializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\Fixtures\ThirdParty\OcrLad\Serializer
 */
class TestDerDeserializer extends DerDeserializer {

    /**
     * {@inheritDoc}
     */
    public static function deserializePage($rawData) {
        return parent::deserializePage($rawData);
    }

    /**
     * {@inheritDoc}
     */
    public static function deserializeWord($rawData) {
        return parent::deserializeWord($rawData);
    }

    /**
     * {@inheritDoc}
     */
    public static function splitHeader($rawData) {
        return parent::splitHeader($rawData);
    }
}