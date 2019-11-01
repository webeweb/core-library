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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringreference2DevisTrait;

/**
 * reference2 devis trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Stringreference2DevisTraitTest extends AbstractTestCase {

    /**
     * Tests the setreference2Devis() method.
     *
     * @return void
     */
    public function testSetreference2Devis() {

        $obj = new TestStringreference2DevisTrait();

        $obj->setreference2Devis("reference2Devis");
        $this->assertEquals("reference2Devis", $obj->getreference2Devis());
    }
}
