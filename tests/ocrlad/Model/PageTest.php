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

use WBW\Library\OcrLad\Model\Document;
use WBW\Library\OcrLad\Model\Page;
use WBW\Library\OcrLad\Tests\AbstractTestCase;

/**
 * Page test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\OcrLad\Tests\Model
 */
class PageTest extends AbstractTestCase {

    /**
     * Tests setParent()
     *
     * @return void
     */
    public function testSetParent(): void {

        // Set a Document mock.
        $document = new Document();

        $obj = new Page();

        $obj->setParent($document);
        $this->assertSame($document, $obj->getParent());
    }

    /**
     * Tests setResolution()
     *
     * @return void
     */
    public function testSetResolution(): void {

        $obj = new Page();

        $obj->setResolution(300);
        $this->assertEquals(300, $obj->getResolution());
    }

    /**
     * Tests setRotation()
     *
     * @return void
     */
    public function testSetRotation(): void {

        $obj = new Page();

        $obj->setRotation(90);
        $this->assertEquals(90, $obj->getRotation());
    }

    /**
     * Tests setTag()
     *
     * @return void
     */
    public function testSetTag(): void {

        $obj = new Page();

        $obj->setTag(0);
        $this->assertEquals(0, $obj->getTag());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Page();

        $this->assertNull($obj->getHeight());
        $this->assertNull($obj->getParent());
        $this->assertNull($obj->getResolution());
        $this->assertNull($obj->getRotation());
        $this->assertNull($obj->getTag());
        $this->assertNull($obj->getWidth());
        $this->assertEquals([], $obj->getWords());
    }
}
