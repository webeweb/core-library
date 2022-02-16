<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\OcrLad\Tests\Model;

use WBW\Library\OcrLad\Geometry\Point;
use WBW\Library\OcrLad\Model\Word;
use WBW\Library\OcrLad\Tests\AbstractTestCase;

/**
 * Word test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\OcrLad\Tests\Model
 */
class WordTest extends AbstractTestCase {

    /**
     * Tests setOcrConfidence()
     *
     * @return void
     */
    public function testSetOcrConfidence(): void {

        $obj = new Word();

        $obj->setOcrConfidence(99.99);
        $this->assertEquals(99.99, $obj->getOcrConfidence());
    }

    /**
     * Tests setX1()
     *
     * @return void
     */
    public function testSetX1(): void {

        $obj = new Word();

        $obj->setX1(1.0);
        $this->assertEquals(1.0, $obj->getX1());
    }

    /**
     * Tests setX2()
     *
     * @return void
     */
    public function testSetX2(): void {

        $obj = new Word();

        $obj->setX2(2.0);
        $this->assertEquals(2.0, $obj->getX2());
    }

    /**
     * Tests setY1()
     *
     * @return void
     */
    public function testSetY1(): void {

        $obj = new Word();

        $obj->setY1(1.1);
        $this->assertEquals(1.1, $obj->getY1());
    }

    /**
     * Tests setY2()
     *
     * @return void
     */
    public function testSetY2(): void {

        $obj = new Word();

        $obj->setY2(2.1);
        $this->assertEquals(2.1, $obj->getY2());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("LB", Word::TYPE_LINE_BREAK);
        $this->assertEquals("NLB", Word::TYPE_NO_LINE_BREAK);

        $obj = new Word();

        $this->assertNull($obj->getContent());
        $this->assertNull($obj->getOcrConfidence());
        $this->assertNull($obj->getPage());
        $this->assertNull($obj->getParent());
        $this->assertInstanceOf(Point::class, $obj->getPoint1());
        $this->assertInstanceOf(Point::class, $obj->getPoint2());
        $this->assertNull($obj->getType());
        $this->assertNull($obj->getX1());
        $this->assertNull($obj->getX2());
        $this->assertNull($obj->getY1());
        $this->assertNull($obj->getY2());
    }
}
