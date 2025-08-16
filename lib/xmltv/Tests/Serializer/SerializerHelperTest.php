<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\XmlTv\Tests\Serializer;

use DateTime;
use WBW\Library\XmlTv\Serializer\SerializerHelper;
use WBW\Library\XmlTv\Tests\AbstractTestCase;

/**
 * Serializer helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Serializer
 */
class SerializerHelperTest extends AbstractTestCase {

    /**
     * Test deserializeDateTime()
     *
     * @return void
     */
    public function testDeserializeDateTime(): void {

        $res = SerializerHelper::deserializeDateTime("20190731180000 +0200");
        $this->assertInstanceOf(DateTime::class, $res);
        $this->assertEquals("2019-07-31 18:00:00", $res->format("Y-m-d H:i:s"));

        $this->assertNull(SerializerHelper::deserializeDateTime("exception"));
    }

    /**
     * Test getMethodName()
     *
     * @return void
     */
    public function testGetMethodName(): void {

        $this->assertEquals("addDisplayName", SerializerHelper::getMethodName("add", "display-name"));
        $this->assertEquals("setUrl", SerializerHelper::getMethodName("set", "url"));
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("YmdHis O", SerializerHelper::DATE_TIME_FORMAT);
    }
}
