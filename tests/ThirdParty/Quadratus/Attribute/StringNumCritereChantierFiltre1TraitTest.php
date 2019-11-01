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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNumCritereChantierFiltre1Trait;

/**
 * Num critere chantier filtre1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNumCritereChantierFiltre1TraitTest extends AbstractTestCase {

    /**
     * Tests the setNumCritereChantierFiltre1() method.
     *
     * @return void
     */
    public function testSetNumCritereChantierFiltre1() {

        $obj = new TestStringNumCritereChantierFiltre1Trait();

        $obj->setNumCritereChantierFiltre1("numCritereChantierFiltre1");
        $this->assertEquals("numCritereChantierFiltre1", $obj->getNumCritereChantierFiltre1());
    }
}
