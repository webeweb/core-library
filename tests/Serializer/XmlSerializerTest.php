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

namespace WBW\Library\Common\Tests\Serializer;

use WBW\Library\Common\Serializer\XmlSerializer;
use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Serializer\TestXmlSerializable;

/**
 * XML serializer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Serializer
 */
class XmlSerializerTest extends AbstractTestCase {

    /**
     * Test serializeArray()
     *
     * @return void
     */
    public function testSerializeArray(): void {

        $models = [
            new TestXmlSerializable(),
            new TestXmlSerializable(),
            null,
        ];

        $res = XmlSerializer::serializeArray($models);
        $this->assertEquals("", $res);
    }

    /**
     * Test serializeValue()
     *
     * @return void
     */
    public function testSerializeValue(): void {

        $this->assertNull(XmlSerializer::serializeValue(null));

        $res = XmlSerializer::serializeValue('<?xml version="1.0" encoding="utf-8"?>');
        $this->assertEquals("&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;", $res);
    }
}
