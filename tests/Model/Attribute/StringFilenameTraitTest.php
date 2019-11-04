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
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestStringFilenameTrait;

/**
 * String filename trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class StringFilenameTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestStringFilenameTrait();

        $this->assertNull($obj->getFilename());
    }

    /**
     * Tests the setFilename() method.
     *
     * @return void
     */
    public function testSetFilename() {

        $obj = new TestStringFilenameTrait();

        $obj->setFilename("filename");
        $this->assertEquals("filename", $obj->getFilename());
    }
}
