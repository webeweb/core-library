<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Service;

use SplFileInfo;
use WBW\Library\Symfony\Service\UploadedFileService;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Uploaded file service test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Service
 */
class UploadedFileServiceTest extends AbstractTestCase {

    /**
     * Directory.
     *
     * @var string
     */
    private $directory;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a directory mock.
        $this->directory = realpath(__DIR__ . "/../Fixtures/app/public");
    }

    /**
     * Tests save()
     *
     * @return void
     */
    public function testSave(): void {

        // Set the directory mock.
        $dir = $this->directory . "/uploads/subdirectory";

        if (true === file_exists("$dir/basename.bak")) {
            unlink("$dir/basename.bak");
        }
        if (true === file_exists($dir)) {
            rmdir($dir);
        }

        // Set the file mocks.
        $src = __DIR__ . "/UploadedFileServiceTest.php";
        $dst = __DIR__ . "/UploadServiceTest.bak";

        if (true === file_exists($dst)) {
            unlink($dst);
        }

        copy($src, $dst);

        // Set an SPL file info mock.
        $uploadedFile = new SplFileInfo($dst);

        $obj = new UploadedFileService($this->directory);

        $res = $obj->save($uploadedFile, "/subdirectory", "basename");
        $this->assertEquals("/uploads/subdirectory/basename.bak", $res);

        $this->assertFileExists("$dir/basename.bak");
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.service.uploaded_file", UploadedFileService::SERVICE_NAME);
        $this->assertEquals("/uploads", UploadedFileService::UPLOAD_DIRECTORY);

        $obj = new UploadedFileService($this->directory);

        $this->assertEquals($this->directory, $obj->getDirectory());
    }
}