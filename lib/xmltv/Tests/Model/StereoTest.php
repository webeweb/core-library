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

use WBW\Library\XmlTv\Model\Stereo;
use WBW\Library\XmlTv\Tests\AbstractTestCase;

/**
 * Stereo test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Model
 */
class StereoTest extends AbstractTestCase {

    /**
     * Test enumContent()
     *
     * @return void
     */
    public function testEnumContent(): void {

        $res = [
            Stereo::CONTENT_BILINGUAL,
            Stereo::CONTENT_DOLBY,
            Stereo::CONTENT_DOLBY_DIGITAL,
            Stereo::CONTENT_MONO,
            Stereo::CONTENT_STEREO,
        ];
        $this->assertEquals($res, Stereo::enumContent());
    }

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new Stereo();
        $obj->setContent("content");

        $res = $obj->jsonSerialize();
        $this->assertCount(1, $res);

        $this->assertArrayHasKey("content", $res);
    }

    /**
     * Test xmlSerialize()
     *
     * @return void
     */
    public function testXmlSerialize(): void {

        $obj = new Stereo();
        $obj->setContent("content");

        $res = '<stereo>content</stereo>';
        $this->assertEquals($res, $obj->xmlSerialize());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("stereo", Stereo::DOM_NODE_NAME);
        $this->assertEquals("bilingual", Stereo::CONTENT_BILINGUAL);
        $this->assertEquals("dolby", Stereo::CONTENT_DOLBY);
        $this->assertEquals("dolby digital", Stereo::CONTENT_DOLBY_DIGITAL);
        $this->assertEquals("mono", Stereo::CONTENT_MONO);
        $this->assertEquals("stereo", Stereo::CONTENT_STEREO);

        $obj = new Stereo();

        $this->assertNull($obj->getContent());
    }
}
