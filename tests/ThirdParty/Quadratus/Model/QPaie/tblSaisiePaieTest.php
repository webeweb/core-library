<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\tblSaisiePaie;

/**
 * tbl saisie paie test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class tblSaisiePaieTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new tblSaisiePaie();

        $this->assertNull($obj->getCodeLibelle());
        $this->assertNull($obj->getCodeUser());
        $this->assertNull($obj->getDateAdded());
        $this->assertNull($obj->getFlag());
        $this->assertNull($obj->getId());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getIntitule2());
        $this->assertNull($obj->getMoisDebFixe());
        $this->assertNull($obj->getMoisFinFixe());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPeriodeRappel());
        $this->assertNull($obj->getPosit());
        $this->assertNull($obj->getTypeLigne());
        $this->assertNull($obj->getValeur1());
        $this->assertNull($obj->getValeur2());
    }

    /**
     * Tests the setCodeLibelle() method.
     *
     * @return void
     */
    public function testSetCodeLibelle() {

        $obj = new tblSaisiePaie();

        $obj->setCodeLibelle("codeLibelle");
        $this->assertEquals("codeLibelle", $obj->getCodeLibelle());
    }

    /**
     * Tests the setCodeUser() method.
     *
     * @return void
     */
    public function testSetCodeUser() {

        $obj = new tblSaisiePaie();

        $obj->setCodeUser("codeUser");
        $this->assertEquals("codeUser", $obj->getCodeUser());
    }

    /**
     * Tests the setDateAdded() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAdded() {

        // Set a Date/time mock.
        $dateAdded = new DateTime("2018-09-10");

        $obj = new tblSaisiePaie();

        $obj->setDateAdded($dateAdded);
        $this->assertSame($dateAdded, $obj->getDateAdded());
    }

    /**
     * Tests the setFlag() method.
     *
     * @return void
     */
    public function testSetFlag() {

        $obj = new tblSaisiePaie();

        $obj->setFlag(10);
        $this->assertEquals(10, $obj->getFlag());
    }

    /**
     * Tests the setId() method.
     *
     * @return void
     */
    public function testSetId() {

        $obj = new tblSaisiePaie();

        $obj->setId(10);
        $this->assertEquals(10, $obj->getId());
    }

    /**
     * Tests the setIndicePeriode() method.
     *
     * @return void
     */
    public function testSetIndicePeriode() {

        $obj = new tblSaisiePaie();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule() {

        $obj = new tblSaisiePaie();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setIntitule2() method.
     *
     * @return void
     */
    public function testSetIntitule2() {

        $obj = new tblSaisiePaie();

        $obj->setIntitule2("intitule2");
        $this->assertEquals("intitule2", $obj->getIntitule2());
    }

    /**
     * Tests the setMoisDebFixe() method.
     *
     * @return void
     */
    public function testSetMoisDebFixe() {

        $obj = new tblSaisiePaie();

        $obj->setMoisDebFixe("moisDebFixe");
        $this->assertEquals("moisDebFixe", $obj->getMoisDebFixe());
    }

    /**
     * Tests the setMoisFinFixe() method.
     *
     * @return void
     */
    public function testSetMoisFinFixe() {

        $obj = new tblSaisiePaie();

        $obj->setMoisFinFixe("moisFinFixe");
        $this->assertEquals("moisFinFixe", $obj->getMoisFinFixe());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new tblSaisiePaie();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode() {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new tblSaisiePaie();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests the setPeriodeRappel() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeRappel() {

        // Set a Date/time mock.
        $periodeRappel = new DateTime("2018-09-10");

        $obj = new tblSaisiePaie();

        $obj->setPeriodeRappel($periodeRappel);
        $this->assertSame($periodeRappel, $obj->getPeriodeRappel());
    }

    /**
     * Tests the setPosit() method.
     *
     * @return void
     */
    public function testSetPosit() {

        $obj = new tblSaisiePaie();

        $obj->setPosit(10);
        $this->assertEquals(10, $obj->getPosit());
    }

    /**
     * Tests the setTypeLigne() method.
     *
     * @return void
     */
    public function testSetTypeLigne() {

        $obj = new tblSaisiePaie();

        $obj->setTypeLigne("typeLigne");
        $this->assertEquals("typeLigne", $obj->getTypeLigne());
    }

    /**
     * Tests the setValeur1() method.
     *
     * @return void
     */
    public function testSetValeur1() {

        $obj = new tblSaisiePaie();

        $obj->setValeur1(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur1());
    }

    /**
     * Tests the setValeur2() method.
     *
     * @return void
     */
    public function testSetValeur2() {

        $obj = new tblSaisiePaie();

        $obj->setValeur2(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur2());
    }
}
