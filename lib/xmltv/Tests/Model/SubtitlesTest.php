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

use InvalidArgumentException;
use Throwable;
use WBW\Library\XmlTv\Model\Subtitles;
use WBW\Library\XmlTv\Tests\AbstractTestCase;

/**
 * Subtitles test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Model
 */
class SubtitlesTest extends AbstractTestCase {

    /**
     * Test enumType()
     *
     * @return void
     */
    public function testEnumType(): void {

        $res = [
            Subtitles::TYPE_DEAF_SIGNED,
            Subtitles::TYPE_ONSCREEN,
            Subtitles::TYPE_TELETEXT,
        ];
        $this->assertEquals($res, Subtitles::enumType());
    }

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new Subtitles();
        $obj->setLanguage($this->language);
        $obj->setType(Subtitles::TYPE_DEAF_SIGNED);

        $res = $obj->jsonSerialize();
        $this->assertCount(2, $res);

        $this->assertArrayHasKey("type", $res);
        $this->assertArrayHasKey("language", $res);
    }

    /**
     * Test setType()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetType(): void {

        $obj = new Subtitles();

        $obj->setType("deaf-signed");
        $this->assertEquals("deaf-signed", $obj->getType());
    }

    /**
     * Test setType()
     *
     * @return void
     */
    public function testSetTypeWithInvalidArgumentException(): void {

        $obj = new Subtitles();

        try {
            $obj->setType("type");
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The type "type" is invalid', $ex->getMessage());
        }
    }

    /**
     * Test xmlSerialize()
     *
     * @return void
     */
    public function testXmlSerialize(): void {

        $obj = new Subtitles();
        $obj->setLanguage($this->language);
        $obj->setType(Subtitles::TYPE_DEAF_SIGNED);

        $res = '<subtitles type="deaf-signed"><language></language></subtitles>';
        $this->assertEquals($res, $obj->xmlSerialize());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("subtitles", Subtitles::DOM_NODE_NAME);
        $this->assertEquals("deaf-signed", Subtitles::TYPE_DEAF_SIGNED);
        $this->assertEquals("onscreen", Subtitles::TYPE_ONSCREEN);
        $this->assertEquals("teletext", Subtitles::TYPE_TELETEXT);

        $obj = new Subtitles();

        $this->assertNull($obj->getLanguage());
        $this->assertNull($obj->getType());
    }
}
