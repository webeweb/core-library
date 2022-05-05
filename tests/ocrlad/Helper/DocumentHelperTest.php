<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\OcrLad\Tests\Helper;

use WBW\Library\OcrLad\Geometry\Point;
use WBW\Library\OcrLad\Helper\DocumentHelper;
use WBW\Library\OcrLad\Model\Document;
use WBW\Library\OcrLad\Serializer\DerDeserializer;
use WBW\Library\OcrLad\Tests\AbstractTestCase;

/**
 * Document helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\OcrLad\Tests\Helper
 */
class DocumentHelperTest extends AbstractTestCase {

    /**
     * Document.
     *
     * @var Document
     */
    private $document;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a filename mock.
        $filename = __DIR__ . "/../Fixtures/OcrLad.der";

        // Set a Document mock.
        $this->document = DerDeserializer::deserializeDocument($filename);
    }

    /**
     * Tests findWordAt()
     *
     * @return void
     */
    public function testFindWordAt(): void {

        $obj = new DocumentHelper($this->document);

        $res = $obj->findWordAt(new Point(0, 0));
        $this->assertEquals("Hello", $res->getContent());

        $this->assertNull($obj->findWordAt(new Point(9999, 9999)));
        $this->assertNull($obj->findWordAt(new Point(9999, 9999), 0));
    }

    /**
     * Tests findWordsIn()
     *
     * @return void
     */
    public function testFindWordsIn(): void {

        $obj = new DocumentHelper($this->document);

        $res = $obj->findWordsIn(new Point(0, 0), new Point(60, 20));
        $this->assertCount(1, $res);

        $this->assertEquals("Hello", $res[0]->getContent());
    }

    /**
     * Tests findWordsStartAt()
     *
     * @return void
     */
    public function testFindWordsStartAt(): void {

        $obj = new DocumentHelper($this->document);

        $res = $obj->findWordsStartAt(new Point(0, 0));
        $this->assertCount(2, $res);

        $this->assertEquals("Hello", $res[0]->getContent());
        $this->assertEquals("World", $res[1]->getContent());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DocumentHelper($this->document);

        $this->assertSame($this->document, $obj->getDocument());
    }
}
