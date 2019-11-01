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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatSmicH39Trait;

/**
 * Smic h39 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatSmicH39TraitTest extends AbstractTestCase {

    /**
     * Tests the setSmicH39() method.
     *
     * @return void
     */
    public function testSetSmicH39() {

        $obj = new TestFloatSmicH39Trait();

        $obj->setSmicH39(10.092018);
        $this->assertEquals(10.092018, $obj->getSmicH39());
    }
}
