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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringAtRisque1Trait;

/**
 * At risque1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringAtRisque1TraitTest extends AbstractTestCase {

    /**
     * Tests the setAtRisque1() method.
     *
     * @return void
     */
    public function testSetAtRisque1() {

        $obj = new TestStringAtRisque1Trait();

        $obj->setAtRisque1("atRisque1");
        $this->assertEquals("atRisque1", $obj->getAtRisque1());
    }
}
