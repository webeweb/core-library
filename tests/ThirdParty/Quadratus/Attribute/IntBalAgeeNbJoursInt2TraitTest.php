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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntBalAgeeNbJoursInt2Trait;

/**
 * Bal agee nb jours int2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntBalAgeeNbJoursInt2TraitTest extends AbstractTestCase {

    /**
     * Tests the setBalAgeeNbJoursInt2() method.
     *
     * @return void
     */
    public function testSetBalAgeeNbJoursInt2() {

        $obj = new TestIntBalAgeeNbJoursInt2Trait();

        $obj->setBalAgeeNbJoursInt2(10);
        $this->assertEquals(10, $obj->getBalAgeeNbJoursInt2());
    }
}
