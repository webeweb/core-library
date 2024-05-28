<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Tests\Component;

use WBW\Library\Widget\Component\ImageInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;

/**
 * Image interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component
 */
class ImageInterfaceTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("image/jpeg", ImageInterface::MIME_TYPE_JPEG);
        $this->assertEquals("image/png", ImageInterface::MIME_TYPE_PNG);

        $this->assertEquals("landscape", ImageInterface::ORIENTATION_LANDSCAPE);
        $this->assertEquals("portrait", ImageInterface::ORIENTATION_PORTRAIT);
        $this->assertEquals("squarish", ImageInterface::ORIENTATION_SQUARISH);
    }
}
