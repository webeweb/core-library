<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Tva;

/**
 * Tva test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class TvaTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Tva();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCompteTvaAchat());
        $this->assertNull($obj->getCompteTvaImmo());
        $this->assertNull($obj->getCompteTvaVente());
        $this->assertNull($obj->getCompteVentilation());
        $this->assertNull($obj->getTauxTva());
        $this->assertNull($obj->getTypeAutoliquidation());
    }
}
