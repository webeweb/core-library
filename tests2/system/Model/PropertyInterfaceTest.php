<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\System\Tests\Model;

use WBW\Library\Common\Model\System\PropertyInterface;
use WBW\Library\System\Tests\AbstractTestCase;

/**
 * Property interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Tests\Model
 */
class PropertyInterfaceTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("file.separator", PropertyInterface::FILE_SEPARATOR);
        $this->assertEquals("php.class.path", PropertyInterface::PHP_CLASS_PATH);
        $this->assertEquals("php.home", PropertyInterface::PHP_HOME);
        $this->assertEquals("php.vendor", PropertyInterface::PHP_VENDOR);
        $this->assertEquals("php.vendor.url", PropertyInterface::PHP_VENDOR_URL);
        $this->assertEquals("php.version", PropertyInterface::PHP_VERSION);
        $this->assertEquals("line.separator", PropertyInterface::LINE_SEPARATOR);
        $this->assertEquals("os.arch", PropertyInterface::OS_ARCH);
        $this->assertEquals("os.name", PropertyInterface::OS_NAME);
        $this->assertEquals("os.version", PropertyInterface::OS_VERSION);
        $this->assertEquals("path.separator", PropertyInterface::PATH_SEPARATOR);
        $this->assertEquals("user.dir", PropertyInterface::USER_DIR);
        $this->assertEquals("user.home", PropertyInterface::USER_HOME);
        $this->assertEquals("user.name", PropertyInterface::USER_NAME);
    }
}
