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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatHs35HeuresTrait;

/**
 * H s35 heures trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatHs35HeuresTraitTest extends AbstractTestCase {

    /**
     * Tests the setHs35Heures() method.
     *
     * @return void
     */
    public function testSetHs35Heures() {

        $obj = new TestFloatHs35HeuresTrait();

        $obj->setHs35Heures(10.092018);
        $this->assertEquals(10.092018, $obj->getHs35Heures());
    }
}
