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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatSalaireRetabliDsnTrait;

/**
 * Salaire retabli d s n trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatSalaireRetabliDsnTraitTest extends AbstractTestCase {

    /**
     * Tests the setSalaireRetabliDsn() method.
     *
     * @return void
     */
    public function testSetSalaireRetabliDsn() {

        $obj = new TestFloatSalaireRetabliDsnTrait();

        $obj->setSalaireRetabliDsn(10.092018);
        $this->assertEquals(10.092018, $obj->getSalaireRetabliDsn());
    }
}
