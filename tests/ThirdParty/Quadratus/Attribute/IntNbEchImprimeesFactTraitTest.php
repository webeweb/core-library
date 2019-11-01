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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntNbEchImprimeesFactTrait;

/**
 * Nb ech imprimees fact trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntNbEchImprimeesFactTraitTest extends AbstractTestCase {

    /**
     * Tests the setNbEchImprimeesFact() method.
     *
     * @return void
     */
    public function testSetNbEchImprimeesFact() {

        $obj = new TestIntNbEchImprimeesFactTrait();

        $obj->setNbEchImprimeesFact(10);
        $this->assertEquals(10, $obj->getNbEchImprimeesFact());
    }
}
