<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Types\Tests\Helper;

use DateTime;
use WBW\Library\Types\Helper\ObjectHelper;
use WBW\Library\Types\Tests\AbstractTestCase;

/**
 * Object helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Types\Tests\Helper
 */
class ObjectHelperTest extends AbstractTestCase {

    /**
     * Tests coalesce()
     *
     * @return void
     */
    public function testCoalesce(): void {

        $this->assertSame($this, ObjectHelper::coalesce($this, null));
        $this->assertSame($this, ObjectHelper::coalesce(null, $this));

        $this->assertNull(ObjectHelper::coalesce(null, null));
    }

    /**
     * Tests compare()
     *
     * @return void
     */
    public function testCompare(): void {

        // Set a Date/time mock.
        $arg = new DateTime();

        $this->assertEquals(null, ObjectHelper::compare(null, null));

        $this->assertEquals(-1, ObjectHelper::compare($arg, null));
        $this->assertEquals(0, ObjectHelper::compare($arg, $arg));
        $this->assertEquals(1, ObjectHelper::compare(null, $arg));
    }
}
