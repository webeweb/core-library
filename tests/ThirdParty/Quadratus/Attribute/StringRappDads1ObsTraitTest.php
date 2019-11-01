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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringRappDads1ObsTrait;

/**
 * Rapp d a d s1 obs trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringRappDads1ObsTraitTest extends AbstractTestCase {

    /**
     * Tests the setRappDads1Obs() method.
     *
     * @return void
     */
    public function testSetRappDads1Obs() {

        $obj = new TestStringRappDads1ObsTrait();

        $obj->setRappDads1Obs("rappDads1Obs");
        $this->assertEquals("rappDads1Obs", $obj->getRappDads1Obs());
    }
}
