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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolXFerCrDucsTrait;

/**
 * X fer cr d u c s trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolXFerCrDucsTraitTest extends AbstractTestCase {

    /**
     * Tests the setXFerCrDucs() method.
     *
     * @return void
     */
    public function testSetXFerCrDucs() {

        $obj = new TestBoolXFerCrDucsTrait();

        $obj->setXFerCrDucs(true);
        $this->assertEquals(true, $obj->getXFerCrDucs());
    }
}
