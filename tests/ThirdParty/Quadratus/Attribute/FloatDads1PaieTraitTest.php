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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatDads1PaieTrait;

/**
 * D a d s1 paie trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatDads1PaieTraitTest extends AbstractTestCase {

    /**
     * Tests the setDads1Paie() method.
     *
     * @return void
     */
    public function testSetDads1Paie() {

        $obj = new TestFloatDads1PaieTrait();

        $obj->setDads1Paie(10.092018);
        $this->assertEquals(10.092018, $obj->getDads1Paie());
    }
}
