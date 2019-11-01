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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolActivationNiveau2Trait;

/**
 * Activation niveau2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolActivationNiveau2TraitTest extends AbstractTestCase {

    /**
     * Tests the setActivationNiveau2() method.
     *
     * @return void
     */
    public function testSetActivationNiveau2() {

        $obj = new TestBoolActivationNiveau2Trait();

        $obj->setActivationNiveau2(true);
        $this->assertEquals(true, $obj->getActivationNiveau2());
    }
}
