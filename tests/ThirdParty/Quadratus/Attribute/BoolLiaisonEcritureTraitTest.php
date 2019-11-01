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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolLiaisonEcritureTrait;

/**
 * Liaison ecriture trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolLiaisonEcritureTraitTest extends AbstractTestCase {

    /**
     * Tests the setLiaisonEcriture() method.
     *
     * @return void
     */
    public function testSetLiaisonEcriture() {

        $obj = new TestBoolLiaisonEcritureTrait();

        $obj->setLiaisonEcriture(true);
        $this->assertEquals(true, $obj->getLiaisonEcriture());
    }
}
