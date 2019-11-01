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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringHeureSup2InfluCassationTrait;

/**
 * Heure sup2 influ cassation trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringHeureSup2InfluCassationTraitTest extends AbstractTestCase {

    /**
     * Tests the setHeureSup2InfluCassation() method.
     *
     * @return void
     */
    public function testSetHeureSup2InfluCassation() {

        $obj = new TestStringHeureSup2InfluCassationTrait();

        $obj->setHeureSup2InfluCassation("heureSup2InfluCassation");
        $this->assertEquals("heureSup2InfluCassation", $obj->getHeureSup2InfluCassation());
    }
}
