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
use WBW\Library\XmlTv\Model\Review;
use WBW\Library\XmlTv\Tests\AbstractTestCase;

/**
 * Review test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Model
 */
class ReviewTest extends AbstractTestCase {

    /**
     * Test enumType()
     *
     * @return void
     */
    public function testEnumType(): void {

        $res = [
            Review::TYPE_TEXT,
            Review::TYPE_URL,
        ];
        $this->assertEquals($res, Review::enumType());
    }

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new Review();
        $obj->setLang("lang");
        $obj->setReviewer("reviewer");
        $obj->setSource("source");
        $obj->setType(Review::TYPE_TEXT);

        $res = $obj->jsonSerialize();
        $this->assertCount(4, $res);

        $this->assertArrayHasKey("type", $res);
        $this->assertArrayHasKey("source", $res);
        $this->assertArrayHasKey("reviewer", $res);
        $this->assertArrayHasKey("lang", $res);
    }

    /**
     * Test setReviewer()
     *
     * @return void
     */
    public function testSetReviewer(): void {

        $obj = new Review();

        $obj->setReviewer("reviewer");
        $this->assertEquals("reviewer", $obj->getReviewer());
    }

    /**
     * Test setSource()
     *
     * @return void
     */
    public function testSetSource(): void {

        $obj = new Review();

        $obj->setSource("source");
        $this->assertEquals("source", $obj->getSource());
    }

    /**
     * Test setType()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetType(): void {

        $obj = new Review();

        $obj->setType("text");
        $this->assertEquals("text", $obj->getType());
    }

    /**
     * Test setType()
     *
     * @return void
     */
    public function testSetTypeWithInvalidArgumentException(): void {

        $obj = new Review();

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

        $obj = new Review();
        $obj->setLang("lang");
        $obj->setReviewer("reviewer");
        $obj->setSource("source");
        $obj->setType(Review::TYPE_TEXT);

        $res = '<review type="text" source="source" reviewer="reviewer" lang="lang"/>';
        $this->assertEquals($res, $obj->xmlSerialize());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("review", Review::DOM_NODE_NAME);
        $this->assertEquals("text", Review::TYPE_TEXT);
        $this->assertEquals("url", Review::TYPE_URL);

        $obj = new Review();

        $this->assertNull($obj->getLang());
        $this->assertNull($obj->getReviewer());
        $this->assertNull($obj->getSource());
        $this->assertNull($obj->getType());
    }
}
