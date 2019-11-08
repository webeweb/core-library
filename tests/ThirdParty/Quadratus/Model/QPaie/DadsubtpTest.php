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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\Dadsubtp;

/**
 * Dadsubtp test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class DadsubtpTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Dadsubtp();

        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getCodeTempsArret());
        $this->assertNull($obj->getDebutPeriode());
        $this->assertNull($obj->getFinPeriode());
        $this->assertNull($obj->getMontantEmployeur());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getNumeroOrdre());
        $this->assertNull($obj->getQualifUniteTemps());
        $this->assertNull($obj->getTempsArret());
        $this->assertNull($obj->getTypeArret());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new Dadsubtp();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCodeOrganisme() method.
     *
     * @return void
     */
    public function testSetCodeOrganisme() {

        $obj = new Dadsubtp();

        $obj->setCodeOrganisme("codeOrganisme");
        $this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
    }

    /**
     * Tests the setCodeTempsArret() method.
     *
     * @return void
     */
    public function testSetCodeTempsArret() {

        $obj = new Dadsubtp();

        $obj->setCodeTempsArret("codeTempsArret");
        $this->assertEquals("codeTempsArret", $obj->getCodeTempsArret());
    }

    /**
     * Tests the setDebutPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDebutPeriode() {

        // Set a Date/time mock.
        $debutPeriode = new DateTime("2018-09-10");

        $obj = new Dadsubtp();

        $obj->setDebutPeriode($debutPeriode);
        $this->assertSame($debutPeriode, $obj->getDebutPeriode());
    }

    /**
     * Tests the setFinPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFinPeriode() {

        // Set a Date/time mock.
        $finPeriode = new DateTime("2018-09-10");

        $obj = new Dadsubtp();

        $obj->setFinPeriode($finPeriode);
        $this->assertSame($finPeriode, $obj->getFinPeriode());
    }

    /**
     * Tests the setMontantEmployeur() method.
     *
     * @return void
     */
    public function testSetMontantEmployeur() {

        $obj = new Dadsubtp();

        $obj->setMontantEmployeur(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantEmployeur());
    }

    /**
     * Tests the setNumero() method.
     *
     * @return void
     */
    public function testSetNumero() {

        $obj = new Dadsubtp();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }

    /**
     * Tests the setNumeroOrdre() method.
     *
     * @return void
     */
    public function testSetNumeroOrdre() {

        $obj = new Dadsubtp();

        $obj->setNumeroOrdre(10);
        $this->assertEquals(10, $obj->getNumeroOrdre());
    }

    /**
     * Tests the setQualifUniteTemps() method.
     *
     * @return void
     */
    public function testSetQualifUniteTemps() {

        $obj = new Dadsubtp();

        $obj->setQualifUniteTemps("qualifUniteTemps");
        $this->assertEquals("qualifUniteTemps", $obj->getQualifUniteTemps());
    }

    /**
     * Tests the setTempsArret() method.
     *
     * @return void
     */
    public function testSetTempsArret() {

        $obj = new Dadsubtp();

        $obj->setTempsArret(10.092018);
        $this->assertEquals(10.092018, $obj->getTempsArret());
    }

    /**
     * Tests the setTypeArret() method.
     *
     * @return void
     */
    public function testSetTypeArret() {

        $obj = new Dadsubtp();

        $obj->setTypeArret("typeArret");
        $this->assertEquals("typeArret", $obj->getTypeArret());
    }
}
