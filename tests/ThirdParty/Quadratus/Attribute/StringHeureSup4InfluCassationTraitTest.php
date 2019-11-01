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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringHeureSup4InfluCassationTrait;

/**
 * Heure sup4 influ cassation trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringHeureSup4InfluCassationTraitTest extends AbstractTestCase {

    /**
     * Tests the setHeureSup4InfluCassation() method.
     *
     * @return void
     */
    public function testSetHeureSup4InfluCassation() {

        $obj = new TestStringHeureSup4InfluCassationTrait();

        $obj->setHeureSup4InfluCassation("heureSup4InfluCassation");
        $this->assertEquals("heureSup4InfluCassation", $obj->getHeureSup4InfluCassation());
    }
}
