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

use WBW\Library\XmlTv\Model\EpisodeNum;
use WBW\Library\XmlTv\Tests\AbstractTestCase;

/**
 * Episode number test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Model
 */
class EpisodeNumTest extends AbstractTestCase {

    /**
     * Test enumSystem()
     *
     * @return void
     */
    public function testEnumSystem(): void {

        $res = [
            EpisodeNum::SYSTEM_ONSCREEN,
            EpisodeNum::SYSTEM_XMLTV_NS,
        ];
        $this->assertEquals($res, EpisodeNum::enumSystem());
    }

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new EpisodeNum();
        $obj->setContent("content");
        $obj->setSystem(EpisodeNum::SYSTEM_ONSCREEN);

        $res = $obj->jsonSerialize();
        $this->assertCount(2, $res);

        $this->assertArrayHasKey("system", $res);
        $this->assertArrayHasKey("content", $res);
    }

    /**
     * Test xmlSerialize()
     *
     * @return void
     */
    public function testXmlSerialize(): void {

        $obj = new EpisodeNum();
        $obj->setContent("content");
        $obj->setSystem(EpisodeNum::SYSTEM_ONSCREEN);

        $res = '<episode-num system="onscreen">content</episode-num>';
        $this->assertEquals($res, $obj->xmlSerialize());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("episode-num", EpisodeNum::DOM_NODE_NAME);
        $this->assertEquals("onscreen", EpisodeNum::SYSTEM_ONSCREEN);
        $this->assertEquals("xmltv_ns", EpisodeNum::SYSTEM_XMLTV_NS);

        $obj = new EpisodeNum();

        $this->assertNull($obj->getContent());
        $this->assertNull($obj->getSystem());
    }
}
