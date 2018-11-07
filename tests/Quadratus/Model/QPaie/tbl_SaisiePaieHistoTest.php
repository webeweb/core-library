<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QPaie;

use DateTime;
use WBW\Library\Core\Quadratus\Model\QPaie\tbl_SaisiePaieHisto;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * tbl_ saisie paie histo model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class tbl_SaisiePaieHistoTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new tbl_SaisiePaieHisto();

        $this->assertNull($obj->getCodeLibelle());
        $this->assertNull($obj->getCodeUser());
        $this->assertNull($obj->getDateAdded());
        $this->assertNull($obj->getFlag());
        $this->assertNull($obj->getID());
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

        $obj = new tbl_SaisiePaieHisto();

        $obj->setCodeLibelle("codeLibelle");
        $this->assertEquals("codeLibelle", $obj->getCodeLibelle());
    }

    /**
     * Tests the setCodeUser() method.
     *
     * @return void
     */
    public function testSetCodeUser() {

        $obj = new tbl_SaisiePaieHisto();

        $obj->setCodeUser("codeUser");
        $this->assertEquals("codeUser", $obj->getCodeUser());
    }

    /**
     * Tests the setDateAdded() method.
     *
     * @return void
     */
    public function testSetDateAdded() {

        $obj = new tbl_SaisiePaieHisto();

        $obj->setDateAdded(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateAdded());
    }

    /**
     * Tests the setFlag() method.
     *
     * @return void
     */
    public function testSetFlag() {

        $obj = new tbl_SaisiePaieHisto();

        $obj->setFlag(10);
        $this->assertEquals(10, $obj->getFlag());
    }

    /**
     * Tests the setID() method.
     *
     * @return void
     */
    public function testSetID() {

        $obj = new tbl_SaisiePaieHisto();

        $obj->setID(10);
        $this->assertEquals(10, $obj->getID());
    }

    /**
     * Tests the setIndicePeriode() method.
     *
     * @return void
     */
    public function testSetIndicePeriode() {

        $obj = new tbl_SaisiePaieHisto();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule() {

        $obj = new tbl_SaisiePaieHisto();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setIntitule2() method.
     *
     * @return void
     */
    public function testSetIntitule2() {

        $obj = new tbl_SaisiePaieHisto();

        $obj->setIntitule2("intitule2");
        $this->assertEquals("intitule2", $obj->getIntitule2());
    }

    /**
     * Tests the setMoisDebFixe() method.
     *
     * @return void
     */
    public function testSetMoisDebFixe() {

        $obj = new tbl_SaisiePaieHisto();

        $obj->setMoisDebFixe("moisDebFixe");
        $this->assertEquals("moisDebFixe", $obj->getMoisDebFixe());
    }

    /**
     * Tests the setMoisFinFixe() method.
     *
     * @return void
     */
    public function testSetMoisFinFixe() {

        $obj = new tbl_SaisiePaieHisto();

        $obj->setMoisFinFixe("moisFinFixe");
        $this->assertEquals("moisFinFixe", $obj->getMoisFinFixe());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new tbl_SaisiePaieHisto();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     */
    public function testSetPeriode() {

        $obj = new tbl_SaisiePaieHisto();

        $obj->setPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
    }

    /**
     * Tests the setPeriodeRappel() method.
     *
     * @return void
     */
    public function testSetPeriodeRappel() {

        $obj = new tbl_SaisiePaieHisto();

        $obj->setPeriodeRappel(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeRappel());
    }

    /**
     * Tests the setPosit() method.
     *
     * @return void
     */
    public function testSetPosit() {

        $obj = new tbl_SaisiePaieHisto();

        $obj->setPosit(10);
        $this->assertEquals(10, $obj->getPosit());
    }

    /**
     * Tests the setTypeLigne() method.
     *
     * @return void
     */
    public function testSetTypeLigne() {

        $obj = new tbl_SaisiePaieHisto();

        $obj->setTypeLigne("typeLigne");
        $this->assertEquals("typeLigne", $obj->getTypeLigne());
    }

    /**
     * Tests the setValeur1() method.
     *
     * @return void
     */
    public function testSetValeur1() {

        $obj = new tbl_SaisiePaieHisto();

        $obj->setValeur1(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur1());
    }

    /**
     * Tests the setValeur2() method.
     *
     * @return void
     */
    public function testSetValeur2() {

        $obj = new tbl_SaisiePaieHisto();

        $obj->setValeur2(10.092018);
        $this->assertEquals(10.092018, $obj->getValeur2());
    }

}
