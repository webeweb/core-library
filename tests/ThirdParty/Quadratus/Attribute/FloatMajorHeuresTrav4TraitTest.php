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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatMajorHeuresTrav4Trait;

/**
 * Major heures trav4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatMajorHeuresTrav4TraitTest extends AbstractTestCase {

    /**
     * Tests the setMajorHeuresTrav4() method.
     *
     * @return void
     */
    public function testSetMajorHeuresTrav4() {

        $obj = new TestFloatMajorHeuresTrav4Trait();

        $obj->setMajorHeuresTrav4(10.092018);
        $this->assertEquals(10.092018, $obj->getMajorHeuresTrav4());
    }
}
