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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\HorairesEmp;

/**
 * Horaires emp model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class HorairesEmpTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new HorairesEmp();

        $this->assertNull($obj->getAou());
        $this->assertNull($obj->getAvr());
        $this->assertNull($obj->getCodeCollaboValid());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getDateDebutAffectation());
        $this->assertNull($obj->getDateFinAffectation());
        $this->assertNull($obj->getDateValidationSynchro());
        $this->assertNull($obj->getDec());
        $this->assertNull($obj->getDimType2());
        $this->assertNull($obj->getDiscrSem());
        $this->assertNull($obj->getDuree());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getFev());
        $this->assertNull($obj->getHNuitType2());
        $this->assertNull($obj->getHeureDeb());
        $this->assertNull($obj->getJFType2());
        $this->assertNull($obj->getJan());
        $this->assertNull($obj->getJuil());
        $this->assertNull($obj->getJuin());
        $this->assertNull($obj->getMai());
        $this->assertNull($obj->getMar());
        $this->assertNull($obj->getNoteMemo());
        $this->assertNull($obj->getNov());
        $this->assertNull($obj->getNumChrono());
        $this->assertNull($obj->getNumJour());
        $this->assertNull($obj->getNumeroAvenant());
        $this->assertNull($obj->getNumeroSemaine());
        $this->assertNull($obj->getOct());
        $this->assertNull($obj->getSaufSemaineComplete());
        $this->assertNull($obj->getSemaineComplete());
        $this->assertNull($obj->getSep());
        $this->assertNull($obj->getTravailleJF());
        $this->assertNull($obj->getTypeContrat());
        $this->assertNull($obj->getTypeFreq());
        $this->assertNull($obj->getUniqID());
        $this->assertNull($obj->getUniqIDSynchro());
    }

    /**
     * Tests the setAou() method.
     *
     * @return void
     */
    public function testSetAou() {

        $obj = new HorairesEmp();

        $obj->setAou(true);
        $this->assertEquals(true, $obj->getAou());
    }

    /**
     * Tests the setAvr() method.
     *
     * @return void
     */
    public function testSetAvr() {

        $obj = new HorairesEmp();

        $obj->setAvr(true);
        $this->assertEquals(true, $obj->getAvr());
    }

    /**
     * Tests the setCodeCollaboValid() method.
     *
     * @return void
     */
    public function testSetCodeCollaboValid() {

        $obj = new HorairesEmp();

        $obj->setCodeCollaboValid("codeCollaboValid");
        $this->assertEquals("codeCollaboValid", $obj->getCodeCollaboValid());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new HorairesEmp();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye() {

        $obj = new HorairesEmp();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setDateDebutAffectation() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebutAffectation() {

        $obj = new HorairesEmp();

        $obj->setDateDebutAffectation(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDebutAffectation());
    }

    /**
     * Tests the setDateFinAffectation() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinAffectation() {

        $obj = new HorairesEmp();

        $obj->setDateFinAffectation(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFinAffectation());
    }

    /**
     * Tests the setDateValidationSynchro() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateValidationSynchro() {

        $obj = new HorairesEmp();

        $obj->setDateValidationSynchro(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateValidationSynchro());
    }

    /**
     * Tests the setDec() method.
     *
     * @return void
     */
    public function testSetDec() {

        $obj = new HorairesEmp();

        $obj->setDec(true);
        $this->assertEquals(true, $obj->getDec());
    }

    /**
     * Tests the setDimType2() method.
     *
     * @return void
     */
    public function testSetDimType2() {

        $obj = new HorairesEmp();

        $obj->setDimType2("dimType2");
        $this->assertEquals("dimType2", $obj->getDimType2());
    }

    /**
     * Tests the setDiscrSem() method.
     *
     * @return void
     */
    public function testSetDiscrSem() {

        $obj = new HorairesEmp();

        $obj->setDiscrSem(10);
        $this->assertEquals(10, $obj->getDiscrSem());
    }

    /**
     * Tests the setDuree() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDuree() {

        $obj = new HorairesEmp();

        $obj->setDuree(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDuree());
    }

    /**
     * Tests the setEtat() method.
     *
     * @return void
     */
    public function testSetEtat() {

        $obj = new HorairesEmp();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests the setFev() method.
     *
     * @return void
     */
    public function testSetFev() {

        $obj = new HorairesEmp();

        $obj->setFev(true);
        $this->assertEquals(true, $obj->getFev());
    }

    /**
     * Tests the setHNuitType2() method.
     *
     * @return void
     */
    public function testSetHNuitType2() {

        $obj = new HorairesEmp();

        $obj->setHNuitType2("hNuitType2");
        $this->assertEquals("hNuitType2", $obj->getHNuitType2());
    }

    /**
     * Tests the setHeureDeb() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHeureDeb() {

        $obj = new HorairesEmp();

        $obj->setHeureDeb(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getHeureDeb());
    }

    /**
     * Tests the setJFType2() method.
     *
     * @return void
     */
    public function testSetJFType2() {

        $obj = new HorairesEmp();

        $obj->setJFType2("jFType2");
        $this->assertEquals("jFType2", $obj->getJFType2());
    }

    /**
     * Tests the setJan() method.
     *
     * @return void
     */
    public function testSetJan() {

        $obj = new HorairesEmp();

        $obj->setJan(true);
        $this->assertEquals(true, $obj->getJan());
    }

    /**
     * Tests the setJuil() method.
     *
     * @return void
     */
    public function testSetJuil() {

        $obj = new HorairesEmp();

        $obj->setJuil(true);
        $this->assertEquals(true, $obj->getJuil());
    }

    /**
     * Tests the setJuin() method.
     *
     * @return void
     */
    public function testSetJuin() {

        $obj = new HorairesEmp();

        $obj->setJuin(true);
        $this->assertEquals(true, $obj->getJuin());
    }

    /**
     * Tests the setMai() method.
     *
     * @return void
     */
    public function testSetMai() {

        $obj = new HorairesEmp();

        $obj->setMai(true);
        $this->assertEquals(true, $obj->getMai());
    }

    /**
     * Tests the setMar() method.
     *
     * @return void
     */
    public function testSetMar() {

        $obj = new HorairesEmp();

        $obj->setMar(true);
        $this->assertEquals(true, $obj->getMar());
    }

    /**
     * Tests the setNoteMemo() method.
     *
     * @return void
     */
    public function testSetNoteMemo() {

        $obj = new HorairesEmp();

        $obj->setNoteMemo("noteMemo");
        $this->assertEquals("noteMemo", $obj->getNoteMemo());
    }

    /**
     * Tests the setNov() method.
     *
     * @return void
     */
    public function testSetNov() {

        $obj = new HorairesEmp();

        $obj->setNov(true);
        $this->assertEquals(true, $obj->getNov());
    }

    /**
     * Tests the setNumChrono() method.
     *
     * @return void
     */
    public function testSetNumChrono() {

        $obj = new HorairesEmp();

        $obj->setNumChrono(10);
        $this->assertEquals(10, $obj->getNumChrono());
    }

    /**
     * Tests the setNumJour() method.
     *
     * @return void
     */
    public function testSetNumJour() {

        $obj = new HorairesEmp();

        $obj->setNumJour("numJour");
        $this->assertEquals("numJour", $obj->getNumJour());
    }

    /**
     * Tests the setNumeroAvenant() method.
     *
     * @return void
     */
    public function testSetNumeroAvenant() {

        $obj = new HorairesEmp();

        $obj->setNumeroAvenant(10);
        $this->assertEquals(10, $obj->getNumeroAvenant());
    }

    /**
     * Tests the setNumeroSemaine() method.
     *
     * @return void
     */
    public function testSetNumeroSemaine() {

        $obj = new HorairesEmp();

        $obj->setNumeroSemaine("numeroSemaine");
        $this->assertEquals("numeroSemaine", $obj->getNumeroSemaine());
    }

    /**
     * Tests the setOct() method.
     *
     * @return void
     */
    public function testSetOct() {

        $obj = new HorairesEmp();

        $obj->setOct(true);
        $this->assertEquals(true, $obj->getOct());
    }

    /**
     * Tests the setSaufSemaineComplete() method.
     *
     * @return void
     */
    public function testSetSaufSemaineComplete() {

        $obj = new HorairesEmp();

        $obj->setSaufSemaineComplete("saufSemaineComplete");
        $this->assertEquals("saufSemaineComplete", $obj->getSaufSemaineComplete());
    }

    /**
     * Tests the setSemaineComplete() method.
     *
     * @return void
     */
    public function testSetSemaineComplete() {

        $obj = new HorairesEmp();

        $obj->setSemaineComplete(true);
        $this->assertEquals(true, $obj->getSemaineComplete());
    }

    /**
     * Tests the setSep() method.
     *
     * @return void
     */
    public function testSetSep() {

        $obj = new HorairesEmp();

        $obj->setSep(true);
        $this->assertEquals(true, $obj->getSep());
    }

    /**
     * Tests the setTravailleJF() method.
     *
     * @return void
     */
    public function testSetTravailleJF() {

        $obj = new HorairesEmp();

        $obj->setTravailleJF("travailleJF");
        $this->assertEquals("travailleJF", $obj->getTravailleJF());
    }

    /**
     * Tests the setTypeContrat() method.
     *
     * @return void
     */
    public function testSetTypeContrat() {

        $obj = new HorairesEmp();

        $obj->setTypeContrat("typeContrat");
        $this->assertEquals("typeContrat", $obj->getTypeContrat());
    }

    /**
     * Tests the setTypeFreq() method.
     *
     * @return void
     */
    public function testSetTypeFreq() {

        $obj = new HorairesEmp();

        $obj->setTypeFreq("typeFreq");
        $this->assertEquals("typeFreq", $obj->getTypeFreq());
    }

    /**
     * Tests the setUniqID() method.
     *
     * @return void
     */
    public function testSetUniqID() {

        $obj = new HorairesEmp();

        $obj->setUniqID("uniqID");
        $this->assertEquals("uniqID", $obj->getUniqID());
    }

    /**
     * Tests the setUniqIDSynchro() method.
     *
     * @return void
     */
    public function testSetUniqIDSynchro() {

        $obj = new HorairesEmp();

        $obj->setUniqIDSynchro("uniqIDSynchro");
        $this->assertEquals("uniqIDSynchro", $obj->getUniqIDSynchro());
    }
}
