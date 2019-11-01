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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatHeuresPeriodeInitialTrait;

/**
 * Heures periode initial trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatHeuresPeriodeInitialTraitTest extends AbstractTestCase {

    /**
     * Tests the setHeuresPeriodeInitial() method.
     *
     * @return void
     */
    public function testSetHeuresPeriodeInitial() {

        $obj = new TestFloatHeuresPeriodeInitialTrait();

        $obj->setHeuresPeriodeInitial(10.092018);
        $this->assertEquals(10.092018, $obj->getHeuresPeriodeInitial());
    }
}
