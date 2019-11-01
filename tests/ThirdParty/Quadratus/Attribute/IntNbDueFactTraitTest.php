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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntNbDueFactTrait;

/**
 * Nb d u e fact trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntNbDueFactTraitTest extends AbstractTestCase {

    /**
     * Tests the setNbDueFact() method.
     *
     * @return void
     */
    public function testSetNbDueFact() {

        $obj = new TestIntNbDueFactTrait();

        $obj->setNbDueFact(10);
        $this->assertEquals(10, $obj->getNbDueFact());
    }
}
