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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCptDotExcTrait;

/**
 * Cpt dot exc trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCptDotExcTraitTest extends AbstractTestCase {

    /**
     * Tests the setCptDotExc() method.
     *
     * @return void
     */
    public function testSetCptDotExc() {

        $obj = new TestStringCptDotExcTrait();

        $obj->setCptDotExc("cptDotExc");
        $this->assertEquals("cptDotExc", $obj->getCptDotExc());
    }
}
