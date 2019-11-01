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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntNAttestAemediTrait;

/**
 * N attest a e m e d i trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntNAttestAemediTraitTest extends AbstractTestCase {

    /**
     * Tests the setNAttestAemedi() method.
     *
     * @return void
     */
    public function testSetNAttestAemedi() {

        $obj = new TestIntNAttestAemediTrait();

        $obj->setNAttestAemedi(10);
        $this->assertEquals(10, $obj->getNAttestAemedi());
    }
}
