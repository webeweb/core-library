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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntNumLotEcritureTrait;

/**
 * Num lot ecriture trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntNumLotEcritureTraitTest extends AbstractTestCase {

    /**
     * Tests the setNumLotEcriture() method.
     *
     * @return void
     */
    public function testSetNumLotEcriture() {

        $obj = new TestIntNumLotEcritureTrait();

        $obj->setNumLotEcriture(10);
        $this->assertEquals(10, $obj->getNumLotEcriture());
    }
}
