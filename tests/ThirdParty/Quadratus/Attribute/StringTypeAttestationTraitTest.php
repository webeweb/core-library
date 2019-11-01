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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeAttestationTrait;

/**
 * Type attestation trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeAttestationTraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeAttestation() method.
     *
     * @return void
     */
    public function testSetTypeAttestation() {

        $obj = new TestStringTypeAttestationTrait();

        $obj->setTypeAttestation("typeAttestation");
        $this->assertEquals("typeAttestation", $obj->getTypeAttestation());
    }
}
