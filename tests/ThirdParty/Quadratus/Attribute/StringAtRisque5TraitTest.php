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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringAtRisque5Trait;

/**
 * At risque5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringAtRisque5TraitTest extends AbstractTestCase {

    /**
     * Tests the setAtRisque5() method.
     *
     * @return void
     */
    public function testSetAtRisque5() {

        $obj = new TestStringAtRisque5Trait();

        $obj->setAtRisque5("atRisque5");
        $this->assertEquals("atRisque5", $obj->getAtRisque5());
    }
}
