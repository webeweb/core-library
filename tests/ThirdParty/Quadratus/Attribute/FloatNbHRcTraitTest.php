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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatNbHRcTrait;

/**
 * Nb h rc trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatNbHRcTraitTest extends AbstractTestCase {

    /**
     * Tests the setNbHRc() method.
     *
     * @return void
     */
    public function testSetNbHRc() {

        $obj = new TestFloatNbHRcTrait();

        $obj->setNbHRc(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHRc());
    }
}
