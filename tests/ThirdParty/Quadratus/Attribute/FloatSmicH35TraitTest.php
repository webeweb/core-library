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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatSmicH35Trait;

/**
 * Smic h35 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatSmicH35TraitTest extends AbstractTestCase {

    /**
     * Tests the setSmicH35() method.
     *
     * @return void
     */
    public function testSetSmicH35() {

        $obj = new TestFloatSmicH35Trait();

        $obj->setSmicH35(10.092018);
        $this->assertEquals(10.092018, $obj->getSmicH35());
    }
}
