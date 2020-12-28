<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Model\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestStringDirectoryTrait;

/**
 * String directory trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class StringDirectoryTraitTest extends AbstractTestCase {

    /**
     * Tests the setDirectory() method.
     *
     * @return void
     */
    public function testSetDirectory(): void {

        $obj = new TestStringDirectoryTrait();

        $obj->setDirectory("directory");
        $this->assertEquals("directory", $obj->getDirectory());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__constructor(): void {

        $obj = new TestStringDirectoryTrait();

        $this->assertNull($obj->getDirectory());
    }
}
