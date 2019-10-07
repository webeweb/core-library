<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\CleRepartitionLignes;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Cle repartition lignes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class CleRepartitionLignesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CleRepartitionLignes();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeCentre());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getValeur());
    }

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode() {

        $obj = new CleRepartitionLignes();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setCodeCentre() method.
     *
     * @return void
     */
    public function testSetCodeCentre() {

        $obj = new CleRepartitionLignes();

        $obj->setCodeCentre("codeCentre");
        $this->assertEquals("codeCentre", $obj->getCodeCentre());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne() {

        $obj = new CleRepartitionLignes();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the setValeur() method.
     *
     * @return void
     */
    public function testSetValeur() {

        $obj = new CleRepartitionLignes();

        $obj->setValeur(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur());
    }
}
