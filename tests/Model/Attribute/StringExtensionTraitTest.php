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
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestStringExtensionTrait;

/**
 * String extension trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class StringExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests the setExtension() method.
     *
     * @return void
     */
    public function testSetExtension() {

        $obj = new TestStringExtensionTrait();

        $obj->setExtension("extension");
        $this->assertEquals("extension", $obj->getExtension());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__constructor() {

        $obj = new TestStringExtensionTrait();

        $this->assertNull($obj->getExtension());
    }
}
