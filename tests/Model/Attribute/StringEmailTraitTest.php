<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Model\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestStringEmailTrait;

/**
 * String email trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class StringEmailTraitTest extends AbstractTestCase {

    /**
     * Tests the setEmail() method.
     *
     * @return void
     */
    public function testSetEmail(): void {

        $obj = new TestStringEmailTrait();

        $obj->setEmail("email");
        $this->assertEquals("email", $obj->getEmail());
    }
}
