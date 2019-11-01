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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatNbHChomPartTechTrait;

/**
 * Nb h chom part tech trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatNbHChomPartTechTraitTest extends AbstractTestCase {

    /**
     * Tests the setNbHChomPartTech() method.
     *
     * @return void
     */
    public function testSetNbHChomPartTech() {

        $obj = new TestFloatNbHChomPartTechTrait();

        $obj->setNbHChomPartTech(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHChomPartTech());
    }
}
