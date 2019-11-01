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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCsEuroOuFrancTrait;

/**
 * C s euro ou franc trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCsEuroOuFrancTraitTest extends AbstractTestCase {

    /**
     * Tests the setCsEuroOuFranc() method.
     *
     * @return void
     */
    public function testSetCsEuroOuFranc() {

        $obj = new TestStringCsEuroOuFrancTrait();

        $obj->setCsEuroOuFranc("csEuroOuFranc");
        $this->assertEquals("csEuroOuFranc", $obj->getCsEuroOuFranc());
    }
}
