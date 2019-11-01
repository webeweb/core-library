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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringHeureSup3InfluCassationTrait;

/**
 * Heure sup3 influ cassation trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringHeureSup3InfluCassationTraitTest extends AbstractTestCase {

    /**
     * Tests the setHeureSup3InfluCassation() method.
     *
     * @return void
     */
    public function testSetHeureSup3InfluCassation() {

        $obj = new TestStringHeureSup3InfluCassationTrait();

        $obj->setHeureSup3InfluCassation("heureSup3InfluCassation");
        $this->assertEquals("heureSup3InfluCassation", $obj->getHeureSup3InfluCassation());
    }
}
