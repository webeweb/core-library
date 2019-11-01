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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntQimg2CptEnvoiTrait;

/**
 * Q i m g2 cpt envoi trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntQimg2CptEnvoiTraitTest extends AbstractTestCase {

    /**
     * Tests the setQimg2CptEnvoi() method.
     *
     * @return void
     */
    public function testSetQimg2CptEnvoi() {

        $obj = new TestIntQimg2CptEnvoiTrait();

        $obj->setQimg2CptEnvoi(10);
        $this->assertEquals(10, $obj->getQimg2CptEnvoi());
    }
}
