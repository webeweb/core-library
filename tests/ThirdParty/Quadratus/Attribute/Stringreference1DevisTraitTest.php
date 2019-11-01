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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringreference1DevisTrait;

/**
 * reference1 devis trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Stringreference1DevisTraitTest extends AbstractTestCase {

    /**
     * Tests the setreference1Devis() method.
     *
     * @return void
     */
    public function testSetreference1Devis() {

        $obj = new TestStringreference1DevisTrait();

        $obj->setreference1Devis("reference1Devis");
        $this->assertEquals("reference1Devis", $obj->getreference1Devis());
    }
}
