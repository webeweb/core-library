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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatMajorHeuresTrav3Trait;

/**
 * Major heures trav3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatMajorHeuresTrav3TraitTest extends AbstractTestCase {

    /**
     * Tests the setMajorHeuresTrav3() method.
     *
     * @return void
     */
    public function testSetMajorHeuresTrav3() {

        $obj = new TestFloatMajorHeuresTrav3Trait();

        $obj->setMajorHeuresTrav3(10.092018);
        $this->assertEquals(10.092018, $obj->getMajorHeuresTrav3());
    }
}
