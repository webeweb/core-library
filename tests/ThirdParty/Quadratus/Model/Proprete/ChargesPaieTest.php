<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\ChargesPaie;

/**
 * Charges paie model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class ChargesPaieTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ChargesPaie();

        $this->assertNull($obj->getArbitrage());
        $this->assertNull($obj->getBrut());
        $this->assertNull($obj->getBrutAL());
        $this->assertNull($obj->getBrutANL());
        $this->assertNull($obj->getChargesPatronales());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getEuro());
        $this->assertNull($obj->getHeuresSup());
        $this->assertNull($obj->getImpos());
        $this->assertNull($obj->getIndemniteCP());
        $this->assertNull($obj->getIndemnitePrecarite());
        $this->assertNull($obj->getInteressement());
        $this->assertNull($obj->getMtNetPayeTheo());
        $this->assertNull($obj->getNbHAbs());
        $this->assertNull($obj->getNbHBase());
        $this->assertNull($obj->getNbHN());
        $this->assertNull($obj->getNbHRc());
        $this->assertNull($obj->getNbHSup1());
        $this->assertNull($obj->getNbHSup2());
        $this->assertNull($obj->getNbHSup3());
        $this->assertNull($obj->getNbHT());
        $this->assertNull($obj->getParticipation());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getProvisionCP());
        $this->assertNull($obj->getSBase());
        $this->assertNull($obj->getSalaire());
        $this->assertNull($obj->getTotRet());
        $this->assertNull($obj->getTrA());
        $this->assertNull($obj->getTrB());
        $this->assertNull($obj->getTrC());
        $this->assertNull($obj->getTxHN());
    }

    /**
     * Tests the setArbitrage() method.
     *
     * @return void
     */
    public function testSetArbitrage() {

        $obj = new ChargesPaie();

        $obj->setArbitrage(10.092018);
        $this->assertEquals(10.092018, $obj->getArbitrage());
    }

    /**
     * Tests the setBrut() method.
     *
     * @return void
     */
    public function testSetBrut() {

        $obj = new ChargesPaie();

        $obj->setBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getBrut());
    }

    /**
     * Tests the setBrutAL() method.
     *
     * @return void
     */
    public function testSetBrutAL() {

        $obj = new ChargesPaie();

        $obj->setBrutAL(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutAL());
    }

    /**
     * Tests the setBrutANL() method.
     *
     * @return void
     */
    public function testSetBrutANL() {

        $obj = new ChargesPaie();

        $obj->setBrutANL(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutANL());
    }

    /**
     * Tests the setChargesPatronales() method.
     *
     * @return void
     */
    public function testSetChargesPatronales() {

        $obj = new ChargesPaie();

        $obj->setChargesPatronales(10.092018);
        $this->assertEquals(10.092018, $obj->getChargesPatronales());
    }

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye() {

        $obj = new ChargesPaie();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setEuro() method.
     *
     * @return void
     */
    public function testSetEuro() {

        $obj = new ChargesPaie();

        $obj->setEuro(true);
        $this->assertEquals(true, $obj->getEuro());
    }

    /**
     * Tests the setHeuresSup() method.
     *
     * @return void
     */
    public function testSetHeuresSup() {

        $obj = new ChargesPaie();

        $obj->setHeuresSup(10.092018);
        $this->assertEquals(10.092018, $obj->getHeuresSup());
    }

    /**
     * Tests the setImpos() method.
     *
     * @return void
     */
    public function testSetImpos() {

        $obj = new ChargesPaie();

        $obj->setImpos(10.092018);
        $this->assertEquals(10.092018, $obj->getImpos());
    }

    /**
     * Tests the setIndemniteCP() method.
     *
     * @return void
     */
    public function testSetIndemniteCP() {

        $obj = new ChargesPaie();

        $obj->setIndemniteCP(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemniteCP());
    }

    /**
     * Tests the setIndemnitePrecarite() method.
     *
     * @return void
     */
    public function testSetIndemnitePrecarite() {

        $obj = new ChargesPaie();

        $obj->setIndemnitePrecarite(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnitePrecarite());
    }

    /**
     * Tests the setInteressement() method.
     *
     * @return void
     */
    public function testSetInteressement() {

        $obj = new ChargesPaie();

        $obj->setInteressement(10.092018);
        $this->assertEquals(10.092018, $obj->getInteressement());
    }

    /**
     * Tests the setMtNetPayeTheo() method.
     *
     * @return void
     */
    public function testSetMtNetPayeTheo() {

        $obj = new ChargesPaie();

        $obj->setMtNetPayeTheo(10.092018);
        $this->assertEquals(10.092018, $obj->getMtNetPayeTheo());
    }

    /**
     * Tests the setNbHAbs() method.
     *
     * @return void
     */
    public function testSetNbHAbs() {

        $obj = new ChargesPaie();

        $obj->setNbHAbs(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHAbs());
    }

    /**
     * Tests the setNbHBase() method.
     *
     * @return void
     */
    public function testSetNbHBase() {

        $obj = new ChargesPaie();

        $obj->setNbHBase(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHBase());
    }

    /**
     * Tests the setNbHN() method.
     *
     * @return void
     */
    public function testSetNbHN() {

        $obj = new ChargesPaie();

        $obj->setNbHN(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHN());
    }

    /**
     * Tests the setNbHRc() method.
     *
     * @return void
     */
    public function testSetNbHRc() {

        $obj = new ChargesPaie();

        $obj->setNbHRc(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHRc());
    }

    /**
     * Tests the setNbHSup1() method.
     *
     * @return void
     */
    public function testSetNbHSup1() {

        $obj = new ChargesPaie();

        $obj->setNbHSup1(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHSup1());
    }

    /**
     * Tests the setNbHSup2() method.
     *
     * @return void
     */
    public function testSetNbHSup2() {

        $obj = new ChargesPaie();

        $obj->setNbHSup2(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHSup2());
    }

    /**
     * Tests the setNbHSup3() method.
     *
     * @return void
     */
    public function testSetNbHSup3() {

        $obj = new ChargesPaie();

        $obj->setNbHSup3(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHSup3());
    }

    /**
     * Tests the setNbHT() method.
     *
     * @return void
     */
    public function testSetNbHT() {

        $obj = new ChargesPaie();

        $obj->setNbHT(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHT());
    }

    /**
     * Tests the setParticipation() method.
     *
     * @return void
     */
    public function testSetParticipation() {

        $obj = new ChargesPaie();

        $obj->setParticipation(10.092018);
        $this->assertEquals(10.092018, $obj->getParticipation());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode() {

        $obj = new ChargesPaie();

        $obj->setPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
    }

    /**
     * Tests the setProvisionCP() method.
     *
     * @return void
     */
    public function testSetProvisionCP() {

        $obj = new ChargesPaie();

        $obj->setProvisionCP(10.092018);
        $this->assertEquals(10.092018, $obj->getProvisionCP());
    }

    /**
     * Tests the setSBase() method.
     *
     * @return void
     */
    public function testSetSBase() {

        $obj = new ChargesPaie();

        $obj->setSBase(10.092018);
        $this->assertEquals(10.092018, $obj->getSBase());
    }

    /**
     * Tests the setSalaire() method.
     *
     * @return void
     */
    public function testSetSalaire() {

        $obj = new ChargesPaie();

        $obj->setSalaire(10.092018);
        $this->assertEquals(10.092018, $obj->getSalaire());
    }

    /**
     * Tests the setTotRet() method.
     *
     * @return void
     */
    public function testSetTotRet() {

        $obj = new ChargesPaie();

        $obj->setTotRet(10.092018);
        $this->assertEquals(10.092018, $obj->getTotRet());
    }

    /**
     * Tests the setTrA() method.
     *
     * @return void
     */
    public function testSetTrA() {

        $obj = new ChargesPaie();

        $obj->setTrA(10.092018);
        $this->assertEquals(10.092018, $obj->getTrA());
    }

    /**
     * Tests the setTrB() method.
     *
     * @return void
     */
    public function testSetTrB() {

        $obj = new ChargesPaie();

        $obj->setTrB(10.092018);
        $this->assertEquals(10.092018, $obj->getTrB());
    }

    /**
     * Tests the setTrC() method.
     *
     * @return void
     */
    public function testSetTrC() {

        $obj = new ChargesPaie();

        $obj->setTrC(10.092018);
        $this->assertEquals(10.092018, $obj->getTrC());
    }

    /**
     * Tests the setTxHN() method.
     *
     * @return void
     */
    public function testSetTxHN() {

        $obj = new ChargesPaie();

        $obj->setTxHN(10.092018);
        $this->assertEquals(10.092018, $obj->getTxHN());
    }
}
