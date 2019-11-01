<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\CartesAppelEtebac;

/**
 * Cartes appel etebac test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class CartesAppelEtebacTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CartesAppelEtebac();

        $this->assertNull($obj->getCarteAppel());
        $this->assertNull($obj->getCodeBanque());
        $this->assertNull($obj->getIdCarte());
        $this->assertNull($obj->getLgCarteAppel());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getTypeCarte());
    }
}
