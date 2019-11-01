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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatNbHAbsJfTrait;

/**
 * Nb h abs j f trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatNbHAbsJfTraitTest extends AbstractTestCase {

    /**
     * Tests the setNbHAbsJf() method.
     *
     * @return void
     */
    public function testSetNbHAbsJf() {

        $obj = new TestFloatNbHAbsJfTrait();

        $obj->setNbHAbsJf(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHAbsJf());
    }
}
