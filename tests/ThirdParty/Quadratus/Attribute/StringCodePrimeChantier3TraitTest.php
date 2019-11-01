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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodePrimeChantier3Trait;

/**
 * Code prime chantier3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodePrimeChantier3TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodePrimeChantier3() method.
     *
     * @return void
     */
    public function testSetCodePrimeChantier3() {

        $obj = new TestStringCodePrimeChantier3Trait();

        $obj->setCodePrimeChantier3("codePrimeChantier3");
        $this->assertEquals("codePrimeChantier3", $obj->getCodePrimeChantier3());
    }
}
