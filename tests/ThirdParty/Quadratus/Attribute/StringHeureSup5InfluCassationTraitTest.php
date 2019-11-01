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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringHeureSup5InfluCassationTrait;

/**
 * Heure sup5 influ cassation trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringHeureSup5InfluCassationTraitTest extends AbstractTestCase {

    /**
     * Tests the setHeureSup5InfluCassation() method.
     *
     * @return void
     */
    public function testSetHeureSup5InfluCassation() {

        $obj = new TestStringHeureSup5InfluCassationTrait();

        $obj->setHeureSup5InfluCassation("heureSup5InfluCassation");
        $this->assertEquals("heureSup5InfluCassation", $obj->getHeureSup5InfluCassation());
    }
}
