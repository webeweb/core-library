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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolAllegParticulierTrait;

/**
 * Alleg particulier trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolAllegParticulierTraitTest extends AbstractTestCase {

    /**
     * Tests the setAllegParticulier() method.
     *
     * @return void
     */
    public function testSetAllegParticulier() {

        $obj = new TestBoolAllegParticulierTrait();

        $obj->setAllegParticulier(true);
        $this->assertEquals(true, $obj->getAllegParticulier());
    }
}
