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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolEcheanceFinQuinzaineTrait;

/**
 * Echeance fin quinzaine trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolEcheanceFinQuinzaineTraitTest extends AbstractTestCase {

    /**
     * Tests the setEcheanceFinQuinzaine() method.
     *
     * @return void
     */
    public function testSetEcheanceFinQuinzaine() {

        $obj = new TestBoolEcheanceFinQuinzaineTrait();

        $obj->setEcheanceFinQuinzaine(true);
        $this->assertEquals(true, $obj->getEcheanceFinQuinzaine());
    }
}
