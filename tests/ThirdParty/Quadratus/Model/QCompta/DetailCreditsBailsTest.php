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

use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\DetailCreditsBails;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Detail credits bails model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class DetailCreditsBailsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DetailCreditsBails();

        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getNumeroDeux());
        $this->assertNull($obj->getQuantite());
        $this->assertNull($obj->getValeur());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule() {

        $obj = new DetailCreditsBails();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne() {

        $obj = new DetailCreditsBails();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the setNumero() method.
     *
     * @return void
     */
    public function testSetNumero() {

        $obj = new DetailCreditsBails();

        $obj->setNumero(10);
        $this->assertEquals(10, $obj->getNumero());
    }

    /**
     * Tests the setNumeroCompte() method.
     *
     * @return void
     */
    public function testSetNumeroCompte() {

        $obj = new DetailCreditsBails();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests the setNumeroDeux() method.
     *
     * @return void
     */
    public function testSetNumeroDeux() {

        $obj = new DetailCreditsBails();

        $obj->setNumeroDeux(10);
        $this->assertEquals(10, $obj->getNumeroDeux());
    }

    /**
     * Tests the setQuantite() method.
     *
     * @return void
     */
    public function testSetQuantite() {

        $obj = new DetailCreditsBails();

        $obj->setQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite());
    }

    /**
     * Tests the setValeur() method.
     *
     * @return void
     */
    public function testSetValeur() {

        $obj = new DetailCreditsBails();

        $obj->setValeur(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur());
    }
}
