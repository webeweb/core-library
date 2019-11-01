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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringEtatPriorite1Trait;

/**
 * Etat priorite1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringEtatPriorite1TraitTest extends AbstractTestCase {

    /**
     * Tests the setEtatPriorite1() method.
     *
     * @return void
     */
    public function testSetEtatPriorite1() {

        $obj = new TestStringEtatPriorite1Trait();

        $obj->setEtatPriorite1("etatPriorite1");
        $this->assertEquals("etatPriorite1", $obj->getEtatPriorite1());
    }
}
