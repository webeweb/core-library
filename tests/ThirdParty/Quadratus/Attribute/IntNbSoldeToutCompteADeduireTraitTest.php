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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntNbSoldeToutCompteADeduireTrait;

/**
 * Nb solde tout compte a deduire trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntNbSoldeToutCompteADeduireTraitTest extends AbstractTestCase {

    /**
     * Tests the setNbSoldeToutCompteADeduire() method.
     *
     * @return void
     */
    public function testSetNbSoldeToutCompteADeduire() {

        $obj = new TestIntNbSoldeToutCompteADeduireTrait();

        $obj->setNbSoldeToutCompteADeduire(10);
        $this->assertEquals(10, $obj->getNbSoldeToutCompteADeduire());
    }
}
