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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntNbDsnEvtFinContratADeduireTrait;

/**
 * Nb d s n evt fin contrat a deduire trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntNbDsnEvtFinContratADeduireTraitTest extends AbstractTestCase {

    /**
     * Tests the setNbDsnEvtFinContratADeduire() method.
     *
     * @return void
     */
    public function testSetNbDsnEvtFinContratADeduire() {

        $obj = new TestIntNbDsnEvtFinContratADeduireTrait();

        $obj->setNbDsnEvtFinContratADeduire(10);
        $this->assertEquals(10, $obj->getNbDsnEvtFinContratADeduire());
    }
}
