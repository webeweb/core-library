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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntNbTdsRealiseesTrait;

/**
 * Nb t d s realisees trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntNbTdsRealiseesTraitTest extends AbstractTestCase {

    /**
     * Tests the setNbTdsRealisees() method.
     *
     * @return void
     */
    public function testSetNbTdsRealisees() {

        $obj = new TestIntNbTdsRealiseesTrait();

        $obj->setNbTdsRealisees(10);
        $this->assertEquals(10, $obj->getNbTdsRealisees());
    }
}
