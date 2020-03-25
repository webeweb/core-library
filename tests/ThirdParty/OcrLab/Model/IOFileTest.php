<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\OcrLab\Model;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\OcrLad\Model\IOFile;

/**
 * I/O file test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\ThirdParty\OcrLab\Model
 */
class IOFileTest extends AbstractTestCase {

    /**
     * Filename.
     *
     * @var string
     */
    private $filename;

    /**
     * {@inheritDoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set a filename mock.
        $this->filename = getcwd() . "/tests/ThirdParty/OcrLad/Model/OcrFileTest.php";
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new IOFile($this->filename);

        $this->assertEquals($this->filename, $obj->getPathname());
    }

    /**
     * Tests the getUniqFilenameDer() method.
     *
     * @return void
     */
    public function testGetUniqFilenameDer() {

        $md5 = md5($this->filename);

        $obj = new IOFile($this->filename);

        $this->assertEquals("{$md5}.der", $obj->getUniqFilenameDer());
    }

    /**
     * Tests the getUniqFilenamePdf() method.
     *
     * @return void
     */
    public function testGetUniqFilenamePdf() {

        $md5 = md5($this->filename);

        $obj = new IOFile($this->filename);

        $this->assertEquals("{$md5}.pdf", $obj->getUniqFilenamePdf());
    }

    /**
     * Tests the getUniqFilenameXml() method.
     *
     * @return void
     */
    public function testGetUniqFilenameXml() {

        $md5 = md5($this->filename);

        $obj = new IOFile($this->filename);

        $this->assertEquals("{$md5}.xml", $obj->getUniqFilenameXml());
    }
}