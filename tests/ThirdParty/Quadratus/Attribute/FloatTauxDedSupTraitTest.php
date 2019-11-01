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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatTauxDedSupTrait;

/**
 * Taux ded sup trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatTauxDedSupTraitTest extends AbstractTestCase {

    /**
     * Tests the setTauxDedSup() method.
     *
     * @return void
     */
    public function testSetTauxDedSup() {

        $obj = new TestFloatTauxDedSupTrait();

        $obj->setTauxDedSup(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxDedSup());
    }
}
