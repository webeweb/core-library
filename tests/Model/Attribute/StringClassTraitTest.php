<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Model\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestStringClassTrait;

/**
 * String class trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class StringClassTraitTest extends AbstractTestCase {

    /**
     * Tests the setClass() method.
     *
     * @return void
     */
    public function testSetClass(): void {

        $obj = new TestStringClassTrait();

        $obj->setClass("class");
        $this->assertEquals("class", $obj->getClass());
    }
}
