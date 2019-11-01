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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatPlafond2RuammTr2Trait;

/**
 * Plafond2 r u a m m tr2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatPlafond2RuammTr2TraitTest extends AbstractTestCase {

    /**
     * Tests the setPlafond2RuammTr2() method.
     *
     * @return void
     */
    public function testSetPlafond2RuammTr2() {

        $obj = new TestFloatPlafond2RuammTr2Trait();

        $obj->setPlafond2RuammTr2(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond2RuammTr2());
    }
}
