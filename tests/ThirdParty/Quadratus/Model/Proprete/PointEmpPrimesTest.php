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
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\PointEmpPrimes;

/**
 * Point emp primes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class PointEmpPrimesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new PointEmpPrimes();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaboValid());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCodePrime());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getCodeTacheTypeBT());
        $this->assertNull($obj->getDateApplication());
        $this->assertNull($obj->getDateValidationSynchro());
        $this->assertNull($obj->getDefaut());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getNbHeureMajoration());
        $this->assertNull($obj->getNombrePrime());
        $this->assertNull($obj->getNumBT());
        $this->assertNull($obj->getNumeroPrime());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getTauxPrime());
        $this->assertNull($obj->getTypeMajo());
        $this->assertNull($obj->getTypePrime());
        $this->assertNull($obj->getUniqIDSynchro());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new PointEmpPrimes();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier() {

        $obj = new PointEmpPrimes();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new PointEmpPrimes();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeCollaboValid() method.
     *
     * @return void
     */
    public function testSetCodeCollaboValid() {

        $obj = new PointEmpPrimes();

        $obj->setCodeCollaboValid("codeCollaboValid");
        $this->assertEquals("codeCollaboValid", $obj->getCodeCollaboValid());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new PointEmpPrimes();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye() {

        $obj = new PointEmpPrimes();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setCodePrime() method.
     *
     * @return void
     */
    public function testSetCodePrime() {

        $obj = new PointEmpPrimes();

        $obj->setCodePrime("codePrime");
        $this->assertEquals("codePrime", $obj->getCodePrime());
    }

    /**
     * Tests the setCodeTache() method.
     *
     * @return void
     */
    public function testSetCodeTache() {

        $obj = new PointEmpPrimes();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Tests the setCodeTacheTypeBT() method.
     *
     * @return void
     */
    public function testSetCodeTacheTypeBT() {

        $obj = new PointEmpPrimes();

        $obj->setCodeTacheTypeBT("codeTacheTypeBT");
        $this->assertEquals("codeTacheTypeBT", $obj->getCodeTacheTypeBT());
    }

    /**
     * Tests the setDateApplication() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateApplication() {

        $obj = new PointEmpPrimes();

        $obj->setDateApplication(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateApplication());
    }

    /**
     * Tests the setDateValidationSynchro() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateValidationSynchro() {

        $obj = new PointEmpPrimes();

        $obj->setDateValidationSynchro(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateValidationSynchro());
    }

    /**
     * Tests the setDefaut() method.
     *
     * @return void
     */
    public function testSetDefaut() {

        $obj = new PointEmpPrimes();

        $obj->setDefaut(true);
        $this->assertEquals(true, $obj->getDefaut());
    }

    /**
     * Tests the setEtat() method.
     *
     * @return void
     */
    public function testSetEtat() {

        $obj = new PointEmpPrimes();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests the setNbHeureMajoration() method.
     *
     * @return void
     */
    public function testSetNbHeureMajoration() {

        $obj = new PointEmpPrimes();

        $obj->setNbHeureMajoration(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureMajoration());
    }

    /**
     * Tests the setNombrePrime() method.
     *
     * @return void
     */
    public function testSetNombrePrime() {

        $obj = new PointEmpPrimes();

        $obj->setNombrePrime(10.092018);
        $this->assertEquals(10.092018, $obj->getNombrePrime());
    }

    /**
     * Tests the setNumBT() method.
     *
     * @return void
     */
    public function testSetNumBT() {

        $obj = new PointEmpPrimes();

        $obj->setNumBT(10);
        $this->assertEquals(10, $obj->getNumBT());
    }

    /**
     * Tests the setNumeroPrime() method.
     *
     * @return void
     */
    public function testSetNumeroPrime() {

        $obj = new PointEmpPrimes();

        $obj->setNumeroPrime(10);
        $this->assertEquals(10, $obj->getNumeroPrime());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode() {

        $obj = new PointEmpPrimes();

        $obj->setPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
    }

    /**
     * Tests the setTauxPrime() method.
     *
     * @return void
     */
    public function testSetTauxPrime() {

        $obj = new PointEmpPrimes();

        $obj->setTauxPrime(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxPrime());
    }

    /**
     * Tests the setTypeMajo() method.
     *
     * @return void
     */
    public function testSetTypeMajo() {

        $obj = new PointEmpPrimes();

        $obj->setTypeMajo("typeMajo");
        $this->assertEquals("typeMajo", $obj->getTypeMajo());
    }

    /**
     * Tests the setTypePrime() method.
     *
     * @return void
     */
    public function testSetTypePrime() {

        $obj = new PointEmpPrimes();

        $obj->setTypePrime("typePrime");
        $this->assertEquals("typePrime", $obj->getTypePrime());
    }

    /**
     * Tests the setUniqIDSynchro() method.
     *
     * @return void
     */
    public function testSetUniqIDSynchro() {

        $obj = new PointEmpPrimes();

        $obj->setUniqIDSynchro("uniqIDSynchro");
        $this->assertEquals("uniqIDSynchro", $obj->getUniqIDSynchro());
    }
}
