<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Utility;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Utility\ImageInterface;

/**
 * Image interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\Utility
 */
class ImageInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("image/jpeg", ImageInterface::MIME_TYPE_JPEG);
        $this->assertEquals("image/png", ImageInterface::MIME_TYPE_PNG);

        $this->assertEquals("horizontal", ImageInterface::ORIENTATION_HORIZONTAL);
        $this->assertEquals("vertical", ImageInterface::ORIENTATION_VERTICAL);
    }
}
