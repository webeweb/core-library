<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Image\Tests\Model;

use WBW\Library\Image\Model\ImageInterface;
use WBW\Library\Image\Tests\AbstractTestCase;

/**
 * Image interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Image\Tests\Model
 */
class ImageInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("image/jpeg", ImageInterface::MIME_TYPE_JPEG);
        $this->assertEquals("image/png", ImageInterface::MIME_TYPE_PNG);

        $this->assertEquals("horizontal", ImageInterface::ORIENTATION_HORIZONTAL);
        $this->assertEquals("vertical", ImageInterface::ORIENTATION_VERTICAL);
    }
}
