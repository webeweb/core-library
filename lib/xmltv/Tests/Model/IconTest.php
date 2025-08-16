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

namespace WBW\Library\XmlTv\Tests\Model;

use WBW\Library\XmlTv\Model\Icon;
use WBW\Library\XmlTv\Tests\AbstractTestCase;

/**
 * Icon test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Model
 */
class IconTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new Icon();

        $res = $obj->jsonSerialize();
        $this->assertCount(3, $res);

        $this->assertArrayHasKey("src", $res);
        $this->assertArrayHasKey("width", $res);
        $this->assertArrayHasKey("height", $res);
    }

    /**
     * Test setHeight()
     *
     * @return void
     */
    public function testSetHeight(): void {

        $obj = new Icon();

        $obj->setHeight(768);
        $this->assertEquals(768, $obj->getHeight());
    }

    /**
     * Test setSrc()
     *
     * @return void
     */
    public function testSetSrc(): void {

        $obj = new Icon();

        $obj->setSrc("src");
        $this->assertEquals("src", $obj->getSrc());
    }

    /**
     * Test setWidth()
     *
     * @return void
     */
    public function testSetWidth(): void {

        $obj = new Icon();

        $obj->setWidth(1024);
        $this->assertEquals(1024, $obj->getWidth());
    }

    /**
     * Test xmlSerialize()
     *
     * @return void
     */
    public function testXmlSerialize(): void {

        $obj = new Icon();
        $obj->setSrc("src");
        $obj->setWidth(1920);
        $obj->setHeight(1080);

        $res = '<icon src="src" width="1920" height="1080"/>';
        $this->assertEquals($res, $obj->xmlSerialize());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("icon", Icon::DOM_NODE_NAME);

        $obj = new Icon();

        $this->assertNull($obj->getHeight());
        $this->assertNull($obj->getSrc());
        $this->assertNull($obj->getWidth());
    }
}
