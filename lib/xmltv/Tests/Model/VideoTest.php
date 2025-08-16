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

use WBW\Library\XmlTv\Model\Video;
use WBW\Library\XmlTv\Tests\AbstractTestCase;

/**
 * Video test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Model
 */
class VideoTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new Video();
        $obj->setAspect($this->aspect);
        $obj->setColour($this->colour);
        $obj->setPresent($this->present);
        $obj->setQuality($this->quality);

        $res = $obj->jsonSerialize();
        $this->assertCount(4, $res);

        $this->assertArrayHasKey("present", $res);
        $this->assertArrayHasKey("colour", $res);
        $this->assertArrayHasKey("aspect", $res);
        $this->assertArrayHasKey("quality", $res);
    }

    /**
     * Test setAspect()
     *
     * @return void
     */
    public function testSetAspect(): void {

        $obj = new Video();

        $obj->setAspect($this->aspect);
        $this->assertSame($this->aspect, $obj->getAspect());
    }

    /**
     * Test setColour()
     *
     * @return void
     */
    public function testSetColour(): void {

        $obj = new Video();

        $obj->setColour($this->colour);
        $this->assertSame($this->colour, $obj->getColour());
    }

    /**
     * Test setQuality()
     *
     * @return void
     */
    public function testSetQuality(): void {

        $obj = new Video();

        $obj->setQuality($this->quality);
        $this->assertSame($this->quality, $obj->getQuality());
    }

    /**
     * Test xmlSerialize()
     *
     * @return void
     */
    public function testXmlSerialize(): void {

        $obj = new Video();
        $obj->setAspect($this->aspect);
        $obj->setColour($this->colour);
        $obj->setPresent($this->present);
        $obj->setQuality($this->quality);

        $res = '<video><present></present><colour></colour><aspect></aspect><quality></quality></video>';
        $this->assertEquals($res, $obj->xmlSerialize());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("video", Video::DOM_NODE_NAME);

        $obj = new Video();

        $this->assertNull($obj->getAspect());
        $this->assertNull($obj->getColour());
        $this->assertNull($obj->getPresent());
        $this->assertNull($obj->getQuality());
    }
}
