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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeClientDistrTrait;

/**
 * Code client distr trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeClientDistrTraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeClientDistr() method.
     *
     * @return void
     */
    public function testSetCodeClientDistr() {

        $obj = new TestStringCodeClientDistrTrait();

        $obj->setCodeClientDistr("codeClientDistr");
        $this->assertEquals("codeClientDistr", $obj->getCodeClientDistr());
    }
}
