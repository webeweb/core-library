<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Serializer\Tests\Helper;

use WBW\Library\Serializer\Helper\XmlSerializerHelper;
use WBW\Library\Serializer\Tests\AbstractTestCase;
use WBW\Library\Serializer\Tests\Fixtures\Model\TestXmlSerializable;

/**
 * XML serializer helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Serializer\Tests\Helper
 */
class XmlSerializerHelperTest extends AbstractTestCase {

    /**
     * Tests serializeArray()
     *
     * @return void
     */
    public function testSerializeArray(): void {

        $models = [
            new TestXmlSerializable(),
            new TestXmlSerializable(),
            null,
        ];

        $res = XmlSerializerHelper::xmlSerializeArray($models);
        $this->assertEquals("", $res);
    }

    /**
     * Tests serializeValue()
     *
     * @return void
     */
    public function testSerializeValue(): void {

        $this->assertNull(XmlSerializerHelper::xmlSerializeValue(null));

        $res = XmlSerializerHelper::xmlSerializeValue('<?xml version="1.0" encoding="utf-8"?>');
        $this->assertEquals("&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;", $res);
    }
}
