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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolEditerEnCfaTrait;

/**
 * Editer en c f a trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolEditerEnCfaTraitTest extends AbstractTestCase {

    /**
     * Tests the setEditerEnCfa() method.
     *
     * @return void
     */
    public function testSetEditerEnCfa() {

        $obj = new TestBoolEditerEnCfaTrait();

        $obj->setEditerEnCfa(true);
        $this->assertEquals(true, $obj->getEditerEnCfa());
    }
}
