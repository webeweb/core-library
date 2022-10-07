<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\OcrLad\Tests\Provider;

use WBW\Library\OcrLad\Model\IOFile;
use WBW\Library\OcrLad\Provider\OcrProvider;
use WBW\Library\OcrLad\Tests\AbstractTestCase;
use WBW\Library\OcrLad\Tests\Fixtures\Provider\TestOcrProvider;

/**
 * OCR provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\OcrLad\Tests\Provider
 */
class OcrProviderTest extends AbstractTestCase {

    /**
     * Tests buildFilePaths()
     *
     * @return void
     */
    public function testBuildFilePaths(): void {

        // Set an I/O file mock.
        $file = new IOFile(getcwd() . "/tests/ThirdParty/OcrLad/Model/OcrFileTest.php");

        $obj = new TestOcrProvider($this->logger);
        $obj->setLocalDirectoryAfter("/localDirectoryAfter");
        $obj->setRemoteDirectoryAfter("/remoteDirectoryAfter");

        $md5 = md5($file->getPathname());

        $exp = [
            "upload" => "/Avant/$md5.pdf",
            "remote" => [
                "/remoteDirectoryAfter/$md5.der",
                "/remoteDirectoryAfter/$md5.pdf",
                "/remoteDirectoryAfter/$md5.xml",
                "/remoteDirectoryAfter/~$md5.tif",
            ],
            "local"  => [
                "/localDirectoryAfter/$md5.der",
                "/localDirectoryAfter/$md5.pdf",
                "/localDirectoryAfter/$md5.xml",
                "/localDirectoryAfter/~$md5.tif",
            ],
        ];

        $res = $obj->buildFilePaths($file);
        $this->assertEquals($exp, $res);
    }

    /**
     * Tests setLocalDirectoryAfter()
     *
     * @return void
     */
    public function testSetLocalDirectoryAfter(): void {

        $obj = new OcrProvider($this->logger);

        $obj->setLocalDirectoryAfter("localDirectoryAfter");
        $this->assertEquals("localDirectoryAfter", $obj->getLocalDirectoryAfter());
    }

    /**
     * Tests setLocalDirectoryBefore()
     *
     * @return void
     */
    public function testSetLocalDirectoryBefore(): void {

        $obj = new OcrProvider($this->logger);

        $obj->setLocalDirectoryBefore("localDirectoryBefore");
        $this->assertEquals("localDirectoryBefore", $obj->getLocalDirectoryBefore());
    }

    /**
     * Tests setLocalDirectoryError()
     *
     * @return void
     */
    public function testSetLocalDirectoryError(): void {

        $obj = new OcrProvider($this->logger);

        $obj->setLocalDirectoryError("localDirectoryError");
        $this->assertEquals("localDirectoryError", $obj->getLocalDirectoryError());
    }

    /**
     * Tests setRemoteDirectoryAfter()
     *
     * @return void
     */
    public function testSetRemoteDirectoryAfter(): void {

        $obj = new OcrProvider($this->logger);

        $obj->setRemoteDirectoryAfter("remoteDirectoryAfter");
        $this->assertEquals("remoteDirectoryAfter", $obj->getRemoteDirectoryAfter());
    }

    /**
     * Tests setRemoteDirectoryBefore()
     *
     * @return void
     */
    public function testSetRemoteDirectoryBefore(): void {

        $obj = new OcrProvider($this->logger);

        $obj->setRemoteDirectoryBefore("remoteDirectoryBefore");
        $this->assertEquals("remoteDirectoryBefore", $obj->getRemoteDirectoryBefore());
    }

    /**
     * Tests setRemoteDirectoryError()
     *
     * @return void
     */
    public function testSetRemoteDirectoryError(): void {

        $obj = new OcrProvider($this->logger);

        $obj->setRemoteDirectoryError("remoteDirectoryError");
        $this->assertEquals("remoteDirectoryError", $obj->getRemoteDirectoryError());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new OcrProvider($this->logger);

        $this->assertNull($obj->getHostname());
        $this->assertNull($obj->getPassword());
        $this->assertNull($obj->getUsername());

        $this->assertNull($obj->getLocalDirectoryAfter());
        $this->assertNull($obj->getLocalDirectoryBefore());
        $this->assertNull($obj->getLocalDirectoryError());
        $this->assertSame($this->logger, $obj->getLogger());
        $this->assertEquals("/Apres", $obj->getRemoteDirectoryAfter());
        $this->assertEquals("/Avant", $obj->getRemoteDirectoryBefore());
        $this->assertEquals("/Erreur", $obj->getRemoteDirectoryError());
    }
}
