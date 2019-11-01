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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFactCodePostalTrait;

/**
 * Fact_ code postal trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFactCodePostalTraitTest extends AbstractTestCase {

    /**
     * Tests the setFactCodePostal() method.
     *
     * @return void
     */
    public function testSetFactCodePostal() {

        $obj = new TestStringFactCodePostalTrait();

        $obj->setFactCodePostal("factCodePostal");
        $this->assertEquals("factCodePostal", $obj->getFactCodePostal());
    }
}
