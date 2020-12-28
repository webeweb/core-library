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
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestStringLabelTrait;

/**
 * String label trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class StringLabelTraitTest extends AbstractTestCase {

    /**
     * Tests the setLabel() method.
     *
     * @return void
     */
    public function testSetLabel(): void {

        $obj = new TestStringLabelTrait();

        $obj->setLabel("label");
        $this->assertEquals("label", $obj->getLabel());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__constructor(): void {

        $obj = new TestStringLabelTrait();

        $this->assertNull($obj->getLabel());
    }
}
