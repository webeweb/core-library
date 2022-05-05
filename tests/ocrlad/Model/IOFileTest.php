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

use WBW\Library\OcrLad\Model\IOFile;
use WBW\Library\OcrLad\Tests\AbstractTestCase;

/**
 * I/O file test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\OcrLad\Tests\Model
 */
class IOFileTest extends AbstractTestCase {

    /**
     * Filename.
     *
     * @var string
     */
    private $filename;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a filename mock.
        $this->filename = getcwd() . "/tests/ThirdParty/OcrLad/Model/OcrFileTest.php";
    }

    /**
     * Tests getUniqFilenameDer()
     *
     * @return void
     */
    public function testGetUniqFilenameDer(): void {

        $md5 = md5($this->filename);

        $obj = new IOFile($this->filename);

        $this->assertEquals("$md5.der", $obj->getUniqFilenameDer());
    }

    /**
     * Tests getUniqFilenamePdf()
     *
     * @return void
     */
    public function testGetUniqFilenamePdf(): void {

        $md5 = md5($this->filename);

        $obj = new IOFile($this->filename);

        $this->assertEquals("$md5.pdf", $obj->getUniqFilenamePdf());
    }

    /**
     * Tests getUniqFilenameTif()
     *
     * @return void
     */
    public function testGetUniqFilenameTif(): void {

        $md5 = md5($this->filename);

        $obj = new IOFile($this->filename);

        $this->assertEquals("~$md5.tif", $obj->getUniqFilenameTif());
    }

    /**
     * Tests getUniqFilenameXml()
     *
     * @return void
     */
    public function testGetUniqFilenameXml(): void {

        $md5 = md5($this->filename);

        $obj = new IOFile($this->filename);

        $this->assertEquals("$md5.xml", $obj->getUniqFilenameXml());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new IOFile($this->filename);

        $this->assertEquals($this->filename, $obj->getPathname());
    }
}
