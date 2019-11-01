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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNumIdccPrestationTravailTrait;

/**
 * Num i d c c prestation travail trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNumIdccPrestationTravailTraitTest extends AbstractTestCase {

    /**
     * Tests the setNumIdccPrestationTravail() method.
     *
     * @return void
     */
    public function testSetNumIdccPrestationTravail() {

        $obj = new TestStringNumIdccPrestationTravailTrait();

        $obj->setNumIdccPrestationTravail("numIdccPrestationTravail");
        $this->assertEquals("numIdccPrestationTravail", $obj->getNumIdccPrestationTravail());
    }
}
