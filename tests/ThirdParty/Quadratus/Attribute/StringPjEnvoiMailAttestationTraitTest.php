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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringPjEnvoiMailAttestationTrait;

/**
 * P j envoi mail attestation trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringPjEnvoiMailAttestationTraitTest extends AbstractTestCase {

    /**
     * Tests the setPjEnvoiMailAttestation() method.
     *
     * @return void
     */
    public function testSetPjEnvoiMailAttestation() {

        $obj = new TestStringPjEnvoiMailAttestationTrait();

        $obj->setPjEnvoiMailAttestation("pjEnvoiMailAttestation");
        $this->assertEquals("pjEnvoiMailAttestation", $obj->getPjEnvoiMailAttestation());
    }
}
