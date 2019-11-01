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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolRuptDateLivraisonTrait;

/**
 * Rupt date livraison trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolRuptDateLivraisonTraitTest extends AbstractTestCase {

    /**
     * Tests the setRuptDateLivraison() method.
     *
     * @return void
     */
    public function testSetRuptDateLivraison() {

        $obj = new TestBoolRuptDateLivraisonTrait();

        $obj->setRuptDateLivraison(true);
        $this->assertEquals(true, $obj->getRuptDateLivraison());
    }
}
