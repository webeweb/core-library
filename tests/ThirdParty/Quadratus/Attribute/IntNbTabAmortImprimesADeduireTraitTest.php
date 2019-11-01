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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntNbTabAmortImprimesADeduireTrait;

/**
 * Nb tab amort imprimes a deduire trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntNbTabAmortImprimesADeduireTraitTest extends AbstractTestCase {

    /**
     * Tests the setNbTabAmortImprimesADeduire() method.
     *
     * @return void
     */
    public function testSetNbTabAmortImprimesADeduire() {

        $obj = new TestIntNbTabAmortImprimesADeduireTrait();

        $obj->setNbTabAmortImprimesADeduire(10);
        $this->assertEquals(10, $obj->getNbTabAmortImprimesADeduire());
    }
}
