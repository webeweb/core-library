<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\OcrLad\Tests\Serializer;

use WBW\Library\OcrLad\Serializer\DerDeserializer;
use WBW\Library\OcrLad\Tests\AbstractTestCase;
use WBW\Library\OcrLad\Tests\Fixtures\Serializer\TestDerDeserializer;

/**
 * DER desrializer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\OcrLad\Tests\Serializer
 */
class DerDeserializerTest extends AbstractTestCase {

    /**
     * Tests deserializeDocument()
     *
     * @return void
     */
    public function testDeserializeDocument(): void {

        // Set a filename mock.
        $filename = __DIR__ . "/../Fixtures/OcrLad.der";

        $res = DerDeserializer::deserializeDocument($filename);
        $this->assertEquals($filename, $res->getFilename());
        $this->assertEquals(1, $res->getNumberPages());
        $this->assertEquals(3, $res->getNumberWords());

        foreach ($res->getPages() as $current) {
            $this->assertSame($res, $current->getParent());
        }

        foreach ($res->getWords() as $current) {
            $this->assertSame($res->getPage(0), $current->getParent());
        }
    }

    /**
     * Tests deserializePage()
     *
     * @return void
     */
    public function testDeserializePage(): void {

        // Set a raw data mock.
        $rawData = "300;3507;2480;270;0;";

        $res = TestDerDeserializer::deserializePage($rawData);
        $this->assertEquals(300, $res->getResolution());
        $this->assertEquals(3507, $res->getWidth());
        $this->assertEquals(2480, $res->getHeight());
        $this->assertEquals(270, $res->getRotation());
        $this->assertEquals(0, $res->getTag());
    }

    /**
     * Tests deserializePage()
     *
     * @return void
     */
    public function testDeserializePageWithoutRawData(): void {

        $res = TestDerDeserializer::deserializePage("");
        $this->assertNull($res);
    }

    /**
     * Tests deserializeWord()
     *
     * @return void
     */
    public function testDeserializeWord(): void {

        // Set a raw data mock.
        $rawData = "Hello;NLB\e1;0,965782880783081;1594;158;1659;201";

        $res = TestDerDeserializer::deserializeWord($rawData);
        $this->assertEquals("Hello", $res->getContent());
        $this->assertEquals(1, $res->getPage());
        $this->assertEquals(0.965782880783081, $res->getOcrConfidence());
        $this->assertEquals("NLB", $res->getType());
        $this->assertEquals(1594, $res->getX1());
        $this->assertEquals(158, $res->getY1());
        $this->assertEquals(1659, $res->getX2());
        $this->assertEquals(201, $res->getY2());
    }

    /**
     * Tests deserializeWord()
     *
     * @return void
     */
    public function testDeserializeWordWithoutRawData(): void {

        $res = TestDerDeserializer::deserializeWord("");
        $this->assertNull($res);
    }

    /**
     * Tests spliHeader()
     *
     * @return void
     */
    public function testSplitHeader(): void {

        // Set a raw data.
        $rawData = "300;2479;3508;0;0;;300;2479;3508;0;0;;300;2479;3508;0;0;;300;2479;3508;0;0;;300;2479;3508;0;0;;300;2479;3508;0;0;;300;2479;3508;0;0;";

        $res = TestDerDeserializer::processHeaders($rawData);
        $this->assertCount(7, $res);

        $this->assertEquals("300;2479;3508;0;0;", $res[0]);
        $this->assertEquals("300;2479;3508;0;0;", $res[1]);
        $this->assertEquals("300;2479;3508;0;0;", $res[2]);
        $this->assertEquals("300;2479;3508;0;0;", $res[3]);
        $this->assertEquals("300;2479;3508;0;0;", $res[4]);
        $this->assertEquals("300;2479;3508;0;0;", $res[5]);
        $this->assertEquals("300;2479;3508;0;0;", $res[6]);
    }

    /**
     * Tests __construct()
     */
    public function test__construct(): void {

        $this->assertEquals(";", DerDeserializer::DER_DELIMITER);
    }
}
