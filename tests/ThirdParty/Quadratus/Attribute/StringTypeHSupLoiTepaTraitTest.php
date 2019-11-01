<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeHSupLoiTepaTrait;

/**
 * Type h sup loi t e p a trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeHSupLoiTepaTraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeHSupLoiTepa() method.
     *
     * @return void
     */
    public function testSetTypeHSupLoiTepa() {

        $obj = new TestStringTypeHSupLoiTepaTrait();

        $obj->setTypeHSupLoiTepa("typeHSupLoiTepa");
        $this->assertEquals("typeHSupLoiTepa", $obj->getTypeHSupLoiTepa());
    }
}
