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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntNbAttestEmploiFactTrait;

/**
 * Nb attest emploi fact trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntNbAttestEmploiFactTraitTest extends AbstractTestCase {

    /**
     * Tests the setNbAttestEmploiFact() method.
     *
     * @return void
     */
    public function testSetNbAttestEmploiFact() {

        $obj = new TestIntNbAttestEmploiFactTrait();

        $obj->setNbAttestEmploiFact(10);
        $this->assertEquals(10, $obj->getNbAttestEmploiFact());
    }
}
