<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Serializer;

use WBW\Library\Symfony\Serializer\SerializerKeys;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Serializer keys test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Serializer
 */
class SerializerKeysTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("dataGet", SerializerKeys::DATA_GET);
        $this->assertEquals("dataPost", SerializerKeys::DATA_POST);
        $this->assertEquals("entity", SerializerKeys::ENTITY);
        $this->assertEquals("entityData", SerializerKeys::ENTITY_DATA);
        $this->assertEquals("entityId", SerializerKeys::ENTITY_ID);
        $this->assertEquals("matcher", SerializerKeys::MATCHER);
        $this->assertEquals("requestDataGet", SerializerKeys::REQUEST_DATA_GET);
        $this->assertEquals("requestDataPost", SerializerKeys::REQUEST_DATA_POST);
        $this->assertEquals("requestMethod", SerializerKeys::REQUEST_METHOD);
        $this->assertEquals("requestRoute", SerializerKeys::REQUEST_ROUTE);
        $this->assertEquals("requestUrl", SerializerKeys::REQUEST_URL);
        $this->assertEquals("xmlHttp", SerializerKeys::XML_HTTP);
    }
}
