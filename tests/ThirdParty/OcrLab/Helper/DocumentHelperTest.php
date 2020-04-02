<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\OcrLab\Helper;

use WBW\Library\Core\Geometry\Point;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\OcrLad\Helper\DocumentHelper;
use WBW\Library\Core\ThirdParty\OcrLad\Model\Document;
use WBW\Library\Core\ThirdParty\OcrLad\Serializer\DerDeserializer;

/**
 * Document helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\ThirdParty\OcrLab\Helper
 */
class DocumentHelperTest extends AbstractTestCase {

    /**
     * Document.
     *
     * @var Document
     */
    private $document;

    /**
     * {@inheritDoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set a filename mock.
        $filename = getcwd() . "/tests/Fixtures/ThirdParty/OcrLad/OcrLad.der";

        // Set a Document mock.
        $this->document = DerDeserializer::deserializeDocument($filename);
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DocumentHelper($this->document);

        $this->assertSame($this->document, $obj->getDocument());
    }

    /**
     * Tests the findWordAt() method.
     *
     * @return void
     */
    public function testFindWordAt() {

        $obj = new DocumentHelper($this->document);

        $res = $obj->findWordAt(new Point(0, 0));
        $this->assertEquals("Hello", $res->getContent());

        $this->assertNull($obj->findWordAt(new Point(9999, 9999)));
        $this->assertNull($obj->findWordAt(new Point(9999, 9999), 0));
    }

    /**
     * Tests the findWordsIn() method.
     *
     * @return void
     */
    public function testFindWordsIn() {

        $obj = new DocumentHelper($this->document);

        $res = $obj->findWordsIn(new Point(0, 0), new Point(60, 20));
        $this->assertCount(1, $res);

        $this->assertEquals("Hello", $res[0]->getContent());
    }

    /**
     * Tests the findWordsStartAt() method.
     *
     * @return void
     */
    public function testFindWordsStartAt() {

        $obj = new DocumentHelper($this->document);

        $res = $obj->findWordsStartAt(new Point(0, 0));
        $this->assertCount(2, $res);

        $this->assertEquals("Hello", $res[0]->getContent());
        $this->assertEquals("World", $res[1]->getContent());
    }
}