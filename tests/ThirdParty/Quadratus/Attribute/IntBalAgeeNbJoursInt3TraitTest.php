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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntBalAgeeNbJoursInt3Trait;

/**
 * Bal agee nb jours int3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntBalAgeeNbJoursInt3TraitTest extends AbstractTestCase {

    /**
     * Tests the setBalAgeeNbJoursInt3() method.
     *
     * @return void
     */
    public function testSetBalAgeeNbJoursInt3() {

        $obj = new TestIntBalAgeeNbJoursInt3Trait();

        $obj->setBalAgeeNbJoursInt3(10);
        $this->assertEquals(10, $obj->getBalAgeeNbJoursInt3());
    }
}
