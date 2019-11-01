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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodePrimeChantier2Trait;

/**
 * Code prime chantier2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodePrimeChantier2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodePrimeChantier2() method.
     *
     * @return void
     */
    public function testSetCodePrimeChantier2() {

        $obj = new TestStringCodePrimeChantier2Trait();

        $obj->setCodePrimeChantier2("codePrimeChantier2");
        $this->assertEquals("codePrimeChantier2", $obj->getCodePrimeChantier2());
    }
}
