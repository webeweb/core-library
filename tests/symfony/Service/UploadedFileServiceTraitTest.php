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

use WBW\Library\Symfony\Service\UploadedFileService;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Service\TestUploadedFileServiceTrait;

/**
 * Uploaded file service trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Service
 */
class UploadedFileServiceTraitTest extends AbstractTestCase {

    /**
     * Tests setUploadedFileService()
     *
     * @return void
     */
    public function testSetUploadedFileService(): void {

        // Set an Uploaded file service mock.
        $uploadedFileService = $this->getMockBuilder(UploadedFileService::class)->disableOriginalConstructor()->getMock();

        $obj = new TestUploadedFileServiceTrait();

        $obj->setUploadedFileService($uploadedFileService);
        $this->assertSame($uploadedFileService, $obj->getUploadedFileService());
    }
}
