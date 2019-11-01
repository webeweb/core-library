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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringEdHSupBonifQueMajoTrait;

/**
 * Ed h sup bonif que majo trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringEdHSupBonifQueMajoTraitTest extends AbstractTestCase {

    /**
     * Tests the setEdHSupBonifQueMajo() method.
     *
     * @return void
     */
    public function testSetEdHSupBonifQueMajo() {

        $obj = new TestStringEdHSupBonifQueMajoTrait();

        $obj->setEdHSupBonifQueMajo("edHSupBonifQueMajo");
        $this->assertEquals("edHSupBonifQueMajo", $obj->getEdHSupBonifQueMajo());
    }
}
