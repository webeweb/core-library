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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringAtRisque2Trait;

/**
 * At risque2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringAtRisque2TraitTest extends AbstractTestCase {

    /**
     * Tests the setAtRisque2() method.
     *
     * @return void
     */
    public function testSetAtRisque2() {

        $obj = new TestStringAtRisque2Trait();

        $obj->setAtRisque2("atRisque2");
        $this->assertEquals("atRisque2", $obj->getAtRisque2());
    }
}
