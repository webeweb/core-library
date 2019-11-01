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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCptValIncTrait;

/**
 * Cpt val inc trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCptValIncTraitTest extends AbstractTestCase {

    /**
     * Tests the setCptValInc() method.
     *
     * @return void
     */
    public function testSetCptValInc() {

        $obj = new TestStringCptValIncTrait();

        $obj->setCptValInc("cptValInc");
        $this->assertEquals("cptValInc", $obj->getCptValInc());
    }
}
