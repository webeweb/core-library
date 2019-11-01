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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringMethodeCalculCiceheTrait;

/**
 * Methode calcul c i c e h e trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringMethodeCalculCiceheTraitTest extends AbstractTestCase {

    /**
     * Tests the setMethodeCalculCicehe() method.
     *
     * @return void
     */
    public function testSetMethodeCalculCicehe() {

        $obj = new TestStringMethodeCalculCiceheTrait();

        $obj->setMethodeCalculCicehe("methodeCalculCicehe");
        $this->assertEquals("methodeCalculCicehe", $obj->getMethodeCalculCicehe());
    }
}
