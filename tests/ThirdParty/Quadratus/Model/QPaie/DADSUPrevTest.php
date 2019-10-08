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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\DADSUPrev;

/**
 * D a d s u prev model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class DADSUPrevTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DADSUPrev();

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
        $this->assertNull($obj->getIndiceDADSU());
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

        $obj = new DADSUPrev();

        $obj->setBasePrev(10.092018);
        $this->assertEquals(10.092018, $obj->getBasePrev());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new DADSUPrev();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCodeOrganisme() method.
     *
     * @return void
     */
    public function testSetCodeOrganisme() {

        $obj = new DADSUPrev();

        $obj->setCodeOrganisme("codeOrganisme");
        $this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
    }

    /**
     * Tests the setCodeOrganismeGestionnaire() method.
     *
     * @return void
     */
    public function testSetCodeOrganismeGestionnaire() {

        $obj = new DADSUPrev();

        $obj->setCodeOrganismeGestionnaire("codeOrganismeGestionnaire");
        $this->assertEquals("codeOrganismeGestionnaire", $obj->getCodeOrganismeGestionnaire());
    }

    /**
     * Tests the setCodePopul() method.
     *
     * @return void
     */
    public function testSetCodePopul() {

        $obj = new DADSUPrev();

        $obj->setCodePopul("codePopul");
        $this->assertEquals("codePopul", $obj->getCodePopul());
    }

    /**
     * Tests the setCodeTypePrev() method.
     *
     * @return void
     */
    public function testSetCodeTypePrev() {

        $obj = new DADSUPrev();

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

        $obj = new DADSUPrev();

        $obj->setDebutPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDebutPeriode());
    }

    /**
     * Tests the setEvenContrat() method.
     *
     * @return void
     */
    public function testSetEvenContrat() {

        $obj = new DADSUPrev();

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

        $obj = new DADSUPrev();

        $obj->setFinPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getFinPeriode());
    }

    /**
     * Tests the setIdInstitution() method.
     *
     * @return void
     */
    public function testSetIdInstitution() {

        $obj = new DADSUPrev();

        $obj->setIdInstitution("idInstitution");
        $this->assertEquals("idInstitution", $obj->getIdInstitution());
    }

    /**
     * Tests the setIndiceDADSU() method.
     *
     * @return void
     */
    public function testSetIndiceDADSU() {

        $obj = new DADSUPrev();

        $obj->setIndiceDADSU(10);
        $this->assertEquals(10, $obj->getIndiceDADSU());
    }

    /**
     * Tests the setNoAffiliation() method.
     *
     * @return void
     */
    public function testSetNoAffiliation() {

        $obj = new DADSUPrev();

        $obj->setNoAffiliation("noAffiliation");
        $this->assertEquals("noAffiliation", $obj->getNoAffiliation());
    }

    /**
     * Tests the setNumero() method.
     *
     * @return void
     */
    public function testSetNumero() {

        $obj = new DADSUPrev();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }

    /**
     * Tests the setNumeroOrdre() method.
     *
     * @return void
     */
    public function testSetNumeroOrdre() {

        $obj = new DADSUPrev();

        $obj->setNumeroOrdre(10);
        $this->assertEquals(10, $obj->getNumeroOrdre());
    }
}
