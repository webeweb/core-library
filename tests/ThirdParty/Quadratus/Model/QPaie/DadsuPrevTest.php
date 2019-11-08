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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\DadsuPrev;

/**
 * Dadsu prev test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class DadsuPrevTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DadsuPrev();

        $this->assertNull($obj->getBasePrev());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getCodeOrganismeGestionnaire());
        $this->assertNull($obj->getCodePopul());
        $this->assertNull($obj->getCodeTypePrev());
        $this->assertNull($obj->getDebutPeriode());
        $this->assertNull($obj->getEvenContrat());
        $this->assertNull($obj->getFinPeriode());
        $this->assertNull($obj->getIdInstitution());
        $this->assertNull($obj->getIndiceDadsu());
        $this->assertNull($obj->getNoAffiliation());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getNumeroOrdre());
    }

    /**
     * Tests the setBasePrev() method.
     *
     * @return void
     */
    public function testSetBasePrev() {

        $obj = new DadsuPrev();

        $obj->setBasePrev(10.092018);
        $this->assertEquals(10.092018, $obj->getBasePrev());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new DadsuPrev();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCodeOrganisme() method.
     *
     * @return void
     */
    public function testSetCodeOrganisme() {

        $obj = new DadsuPrev();

        $obj->setCodeOrganisme("codeOrganisme");
        $this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
    }

    /**
     * Tests the setCodeOrganismeGestionnaire() method.
     *
     * @return void
     */
    public function testSetCodeOrganismeGestionnaire() {

        $obj = new DadsuPrev();

        $obj->setCodeOrganismeGestionnaire("codeOrganismeGestionnaire");
        $this->assertEquals("codeOrganismeGestionnaire", $obj->getCodeOrganismeGestionnaire());
    }

    /**
     * Tests the setCodePopul() method.
     *
     * @return void
     */
    public function testSetCodePopul() {

        $obj = new DadsuPrev();

        $obj->setCodePopul("codePopul");
        $this->assertEquals("codePopul", $obj->getCodePopul());
    }

    /**
     * Tests the setCodeTypePrev() method.
     *
     * @return void
     */
    public function testSetCodeTypePrev() {

        $obj = new DadsuPrev();

        $obj->setCodeTypePrev("codeTypePrev");
        $this->assertEquals("codeTypePrev", $obj->getCodeTypePrev());
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

        $obj = new DadsuPrev();

        $obj->setDebutPeriode($debutPeriode);
        $this->assertSame($debutPeriode, $obj->getDebutPeriode());
    }

    /**
     * Tests the setEvenContrat() method.
     *
     * @return void
     */
    public function testSetEvenContrat() {

        $obj = new DadsuPrev();

        $obj->setEvenContrat("evenContrat");
        $this->assertEquals("evenContrat", $obj->getEvenContrat());
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

        $obj = new DadsuPrev();

        $obj->setFinPeriode($finPeriode);
        $this->assertSame($finPeriode, $obj->getFinPeriode());
    }

    /**
     * Tests the setIdInstitution() method.
     *
     * @return void
     */
    public function testSetIdInstitution() {

        $obj = new DadsuPrev();

        $obj->setIdInstitution("idInstitution");
        $this->assertEquals("idInstitution", $obj->getIdInstitution());
    }

    /**
     * Tests the setIndiceDadsu() method.
     *
     * @return void
     */
    public function testSetIndiceDadsu() {

        $obj = new DadsuPrev();

        $obj->setIndiceDadsu(10);
        $this->assertEquals(10, $obj->getIndiceDadsu());
    }

    /**
     * Tests the setNoAffiliation() method.
     *
     * @return void
     */
    public function testSetNoAffiliation() {

        $obj = new DadsuPrev();

        $obj->setNoAffiliation("noAffiliation");
        $this->assertEquals("noAffiliation", $obj->getNoAffiliation());
    }

    /**
     * Tests the setNumero() method.
     *
     * @return void
     */
    public function testSetNumero() {

        $obj = new DadsuPrev();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }

    /**
     * Tests the setNumeroOrdre() method.
     *
     * @return void
     */
    public function testSetNumeroOrdre() {

        $obj = new DadsuPrev();

        $obj->setNumeroOrdre(10);
        $this->assertEquals(10, $obj->getNumeroOrdre());
    }
}
