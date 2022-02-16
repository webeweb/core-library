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
 * Document test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\OcrLad\Tests\Model
 */
class DocumentTest extends AbstractTestCase {

    /**
     * Tests addPage()
     *
     * @return void
     */
    public function testAddPage(): void {

        // Set a Page mock.
        $page = new Page();

        $obj = new Document();

        $obj->addPage($page);
        $this->assertSame($page, $obj->getPages()[0]);
        $this->assertEquals(1, $obj->getNumberPages());
        $this->assertTrue($obj->hasPages());
    }

    /**
     * Tests getPage()
     *
     * @return void
     */
    public function testGetPage(): void {

        // Set a Page mock.
        $page = new Page();

        $obj = new Document();
        $obj->addPage($page);

        $this->assertSame($page, $obj->getPage(0));

        $this->assertNull($obj->getPage(-1));
        $this->assertNull($obj->getPage(1));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Document();

        $this->assertNull($obj->getFilename());
        $this->assertEquals([], $obj->getIndex());
        $this->assertEquals([], $obj->getPages());
        $this->assertEquals([], $obj->getWords());

        $this->assertEquals(0, $obj->getNumberPages());
        $this->assertEquals(0, $obj->getNumberWords());
        $this->assertFalse($obj->hasPages());
        $this->assertFalse($obj->hasWords());
    }
}
