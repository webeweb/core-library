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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTds19Trait;

/**
 * T d s19 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTds19TraitTest extends AbstractTestCase {

    /**
     * Tests the setTds19() method.
     *
     * @return void
     */
    public function testSetTds19() {

        $obj = new TestStringTds19Trait();

        $obj->setTds19("tds19");
        $this->assertEquals("tds19", $obj->getTds19());
    }
}
