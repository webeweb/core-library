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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatSoldeJoursN1Trait;

/**
 * Solde jours n_1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatSoldeJoursN1TraitTest extends AbstractTestCase {

    /**
     * Tests the setSoldeJoursN1() method.
     *
     * @return void
     */
    public function testSetSoldeJoursN1() {

        $obj = new TestFloatSoldeJoursN1Trait();

        $obj->setSoldeJoursN1(10.092018);
        $this->assertEquals(10.092018, $obj->getSoldeJoursN1());
    }
}
