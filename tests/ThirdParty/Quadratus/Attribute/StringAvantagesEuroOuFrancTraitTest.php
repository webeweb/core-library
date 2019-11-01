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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringAvantagesEuroOuFrancTrait;

/**
 * Avantages euro ou franc trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringAvantagesEuroOuFrancTraitTest extends AbstractTestCase {

    /**
     * Tests the setAvantagesEuroOuFranc() method.
     *
     * @return void
     */
    public function testSetAvantagesEuroOuFranc() {

        $obj = new TestStringAvantagesEuroOuFrancTrait();

        $obj->setAvantagesEuroOuFranc("avantagesEuroOuFranc");
        $this->assertEquals("avantagesEuroOuFranc", $obj->getAvantagesEuroOuFranc());
    }
}
