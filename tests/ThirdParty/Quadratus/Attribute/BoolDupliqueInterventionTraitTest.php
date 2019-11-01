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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolDupliqueInterventionTrait;

/**
 * Duplique intervention trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolDupliqueInterventionTraitTest extends AbstractTestCase {

    /**
     * Tests the setDupliqueIntervention() method.
     *
     * @return void
     */
    public function testSetDupliqueIntervention() {

        $obj = new TestBoolDupliqueInterventionTrait();

        $obj->setDupliqueIntervention(true);
        $this->assertEquals(true, $obj->getDupliqueIntervention());
    }
}
