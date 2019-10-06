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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\HistoPrepPaie;

/**
 * Histo prep paie model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class HistoPrepPaieTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new HistoPrepPaie();

        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getContingentHSupReposComp());
        $this->assertNull($obj->getDroitCP());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getHABS0());
        $this->assertNull($obj->getHABS1());
        $this->assertNull($obj->getHABS2());
        $this->assertNull($obj->getHABS3());
        $this->assertNull($obj->getHABS4());
        $this->assertNull($obj->getHABS5());
        $this->assertNull($obj->getHABS6());
        $this->assertNull($obj->getHABS7());
        $this->assertNull($obj->getHABS8());
        $this->assertNull($obj->getHABS9());
        $this->assertNull($obj->getHACP());
        $this->assertNull($obj->getHC());
        $this->assertNull($obj->getHPrev());
        $this->assertNull($obj->getHRempl());
        $this->assertNull($obj->getHS1());
        $this->assertNull($obj->getHS2());
        $this->assertNull($obj->getHS3());
        $this->assertNull($obj->getHS35Heures());
        $this->assertNull($obj->getHSurcroit());
        $this->assertNull($obj->getHeuresRCAcquises());
        $this->assertNull($obj->getHeuresRRAcquises());
        $this->assertNull($obj->getJACP());
        $this->assertNull($obj->getJoursRTTAcquis());
        $this->assertNull($obj->getMensualisation());
        $this->assertNull($obj->getMtPrime1Chantier());
        $this->assertNull($obj->getMtPrime2Chantier());
        $this->assertNull($obj->getMtPrime3Chantier());
        $this->assertNull($obj->getMtPrimeForfait());
        $this->assertNull($obj->getNbHeuresRS());
        $this->assertNull($obj->getNbHeuresTP());
        $this->assertNull($obj->getNbPaniers());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPrime1());
        $this->assertNull($obj->getPrime10());
        $this->assertNull($obj->getPrime1Mai());
        $this->assertNull($obj->getPrime2());
        $this->assertNull($obj->getPrime3());
        $this->assertNull($obj->getPrime4());
        $this->assertNull($obj->getPrime5());
        $this->assertNull($obj->getPrime6());
        $this->assertNull($obj->getPrime7());
        $this->assertNull($obj->getPrime8());
        $this->assertNull($obj->getPrime9());
        $this->assertNull($obj->getPrimeHComplMaj());
        $this->assertNull($obj->getPrimeHDim2Normal());
        $this->assertNull($obj->getPrimeHDimExcept());
        $this->assertNull($obj->getPrimeHDimNormal());
        $this->assertNull($obj->getPrimeHNuit2Normal());
        $this->assertNull($obj->getPrimeHNuitExcept());
        $this->assertNull($obj->getPrimeHNuitNormal());
        $this->assertNull($obj->getPrimeJF2Normal());
        $this->assertNull($obj->getPrimeJFExcept());
        $this->assertNull($obj->getPrimeJFNormal());
        $this->assertNull($obj->getTempsPasse());
        $this->assertNull($obj->getTotalHAnal());
        $this->assertNull($obj->getTxHoraireRS());
        $this->assertNull($obj->getTxHoraireTP());
        $this->assertNull($obj->getYaEuSaisieManuelle());
    }

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye() {

        $obj = new HistoPrepPaie();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setContingentHSupReposComp() method.
     *
     * @return void
     */
    public function testSetContingentHSupReposComp() {

        $obj = new HistoPrepPaie();

        $obj->setContingentHSupReposComp(10.092018);
        $this->assertEquals(10.092018, $obj->getContingentHSupReposComp());
    }

    /**
     * Tests the setDroitCP() method.
     *
     * @return void
     */
    public function testSetDroitCP() {

        $obj = new HistoPrepPaie();

        $obj->setDroitCP(10.092018);
        $this->assertEquals(10.092018, $obj->getDroitCP());
    }

    /**
     * Tests the setEtat() method.
     *
     * @return void
     */
    public function testSetEtat() {

        $obj = new HistoPrepPaie();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests the setHABS0() method.
     *
     * @return void
     */
    public function testSetHABS0() {

        $obj = new HistoPrepPaie();

        $obj->setHABS0(10.092018);
        $this->assertEquals(10.092018, $obj->getHABS0());
    }

    /**
     * Tests the setHABS1() method.
     *
     * @return void
     */
    public function testSetHABS1() {

        $obj = new HistoPrepPaie();

        $obj->setHABS1(10.092018);
        $this->assertEquals(10.092018, $obj->getHABS1());
    }

    /**
     * Tests the setHABS2() method.
     *
     * @return void
     */
    public function testSetHABS2() {

        $obj = new HistoPrepPaie();

        $obj->setHABS2(10.092018);
        $this->assertEquals(10.092018, $obj->getHABS2());
    }

    /**
     * Tests the setHABS3() method.
     *
     * @return void
     */
    public function testSetHABS3() {

        $obj = new HistoPrepPaie();

        $obj->setHABS3(10.092018);
        $this->assertEquals(10.092018, $obj->getHABS3());
    }

    /**
     * Tests the setHABS4() method.
     *
     * @return void
     */
    public function testSetHABS4() {

        $obj = new HistoPrepPaie();

        $obj->setHABS4(10.092018);
        $this->assertEquals(10.092018, $obj->getHABS4());
    }

    /**
     * Tests the setHABS5() method.
     *
     * @return void
     */
    public function testSetHABS5() {

        $obj = new HistoPrepPaie();

        $obj->setHABS5(10.092018);
        $this->assertEquals(10.092018, $obj->getHABS5());
    }

    /**
     * Tests the setHABS6() method.
     *
     * @return void
     */
    public function testSetHABS6() {

        $obj = new HistoPrepPaie();

        $obj->setHABS6(10.092018);
        $this->assertEquals(10.092018, $obj->getHABS6());
    }

    /**
     * Tests the setHABS7() method.
     *
     * @return void
     */
    public function testSetHABS7() {

        $obj = new HistoPrepPaie();

        $obj->setHABS7(10.092018);
        $this->assertEquals(10.092018, $obj->getHABS7());
    }

    /**
     * Tests the setHABS8() method.
     *
     * @return void
     */
    public function testSetHABS8() {

        $obj = new HistoPrepPaie();

        $obj->setHABS8(10.092018);
        $this->assertEquals(10.092018, $obj->getHABS8());
    }

    /**
     * Tests the setHABS9() method.
     *
     * @return void
     */
    public function testSetHABS9() {

        $obj = new HistoPrepPaie();

        $obj->setHABS9(10.092018);
        $this->assertEquals(10.092018, $obj->getHABS9());
    }

    /**
     * Tests the setHACP() method.
     *
     * @return void
     */
    public function testSetHACP() {

        $obj = new HistoPrepPaie();

        $obj->setHACP(10.092018);
        $this->assertEquals(10.092018, $obj->getHACP());
    }

    /**
     * Tests the setHC() method.
     *
     * @return void
     */
    public function testSetHC() {

        $obj = new HistoPrepPaie();

        $obj->setHC(10.092018);
        $this->assertEquals(10.092018, $obj->getHC());
    }

    /**
     * Tests the setHPrev() method.
     *
     * @return void
     */
    public function testSetHPrev() {

        $obj = new HistoPrepPaie();

        $obj->setHPrev(10.092018);
        $this->assertEquals(10.092018, $obj->getHPrev());
    }

    /**
     * Tests the setHRempl() method.
     *
     * @return void
     */
    public function testSetHRempl() {

        $obj = new HistoPrepPaie();

        $obj->setHRempl(10.092018);
        $this->assertEquals(10.092018, $obj->getHRempl());
    }

    /**
     * Tests the setHS1() method.
     *
     * @return void
     */
    public function testSetHS1() {

        $obj = new HistoPrepPaie();

        $obj->setHS1(10.092018);
        $this->assertEquals(10.092018, $obj->getHS1());
    }

    /**
     * Tests the setHS2() method.
     *
     * @return void
     */
    public function testSetHS2() {

        $obj = new HistoPrepPaie();

        $obj->setHS2(10.092018);
        $this->assertEquals(10.092018, $obj->getHS2());
    }

    /**
     * Tests the setHS3() method.
     *
     * @return void
     */
    public function testSetHS3() {

        $obj = new HistoPrepPaie();

        $obj->setHS3(10.092018);
        $this->assertEquals(10.092018, $obj->getHS3());
    }

    /**
     * Tests the setHS35Heures() method.
     *
     * @return void
     */
    public function testSetHS35Heures() {

        $obj = new HistoPrepPaie();

        $obj->setHS35Heures(10.092018);
        $this->assertEquals(10.092018, $obj->getHS35Heures());
    }

    /**
     * Tests the setHSurcroit() method.
     *
     * @return void
     */
    public function testSetHSurcroit() {

        $obj = new HistoPrepPaie();

        $obj->setHSurcroit(10.092018);
        $this->assertEquals(10.092018, $obj->getHSurcroit());
    }

    /**
     * Tests the setHeuresRCAcquises() method.
     *
     * @return void
     */
    public function testSetHeuresRCAcquises() {

        $obj = new HistoPrepPaie();

        $obj->setHeuresRCAcquises(10.092018);
        $this->assertEquals(10.092018, $obj->getHeuresRCAcquises());
    }

    /**
     * Tests the setHeuresRRAcquises() method.
     *
     * @return void
     */
    public function testSetHeuresRRAcquises() {

        $obj = new HistoPrepPaie();

        $obj->setHeuresRRAcquises(10.092018);
        $this->assertEquals(10.092018, $obj->getHeuresRRAcquises());
    }

    /**
     * Tests the setJACP() method.
     *
     * @return void
     */
    public function testSetJACP() {

        $obj = new HistoPrepPaie();

        $obj->setJACP(10);
        $this->assertEquals(10, $obj->getJACP());
    }

    /**
     * Tests the setJoursRTTAcquis() method.
     *
     * @return void
     */
    public function testSetJoursRTTAcquis() {

        $obj = new HistoPrepPaie();

        $obj->setJoursRTTAcquis(10.092018);
        $this->assertEquals(10.092018, $obj->getJoursRTTAcquis());
    }

    /**
     * Tests the setMensualisation() method.
     *
     * @return void
     */
    public function testSetMensualisation() {

        $obj = new HistoPrepPaie();

        $obj->setMensualisation(10.092018);
        $this->assertEquals(10.092018, $obj->getMensualisation());
    }

    /**
     * Tests the setMtPrime1Chantier() method.
     *
     * @return void
     */
    public function testSetMtPrime1Chantier() {

        $obj = new HistoPrepPaie();

        $obj->setMtPrime1Chantier(10.092018);
        $this->assertEquals(10.092018, $obj->getMtPrime1Chantier());
    }

    /**
     * Tests the setMtPrime2Chantier() method.
     *
     * @return void
     */
    public function testSetMtPrime2Chantier() {

        $obj = new HistoPrepPaie();

        $obj->setMtPrime2Chantier(10.092018);
        $this->assertEquals(10.092018, $obj->getMtPrime2Chantier());
    }

    /**
     * Tests the setMtPrime3Chantier() method.
     *
     * @return void
     */
    public function testSetMtPrime3Chantier() {

        $obj = new HistoPrepPaie();

        $obj->setMtPrime3Chantier(10.092018);
        $this->assertEquals(10.092018, $obj->getMtPrime3Chantier());
    }

    /**
     * Tests the setMtPrimeForfait() method.
     *
     * @return void
     */
    public function testSetMtPrimeForfait() {

        $obj = new HistoPrepPaie();

        $obj->setMtPrimeForfait(10.092018);
        $this->assertEquals(10.092018, $obj->getMtPrimeForfait());
    }

    /**
     * Tests the setNbHeuresRS() method.
     *
     * @return void
     */
    public function testSetNbHeuresRS() {

        $obj = new HistoPrepPaie();

        $obj->setNbHeuresRS(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeuresRS());
    }

    /**
     * Tests the setNbHeuresTP() method.
     *
     * @return void
     */
    public function testSetNbHeuresTP() {

        $obj = new HistoPrepPaie();

        $obj->setNbHeuresTP(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeuresTP());
    }

    /**
     * Tests the setNbPaniers() method.
     *
     * @return void
     */
    public function testSetNbPaniers() {

        $obj = new HistoPrepPaie();

        $obj->setNbPaniers(10.092018);
        $this->assertEquals(10.092018, $obj->getNbPaniers());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode() {

        $obj = new HistoPrepPaie();

        $obj->setPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
    }

    /**
     * Tests the setPrime1() method.
     *
     * @return void
     */
    public function testSetPrime1() {

        $obj = new HistoPrepPaie();

        $obj->setPrime1(10.092018);
        $this->assertEquals(10.092018, $obj->getPrime1());
    }

    /**
     * Tests the setPrime10() method.
     *
     * @return void
     */
    public function testSetPrime10() {

        $obj = new HistoPrepPaie();

        $obj->setPrime10(10.092018);
        $this->assertEquals(10.092018, $obj->getPrime10());
    }

    /**
     * Tests the setPrime1Mai() method.
     *
     * @return void
     */
    public function testSetPrime1Mai() {

        $obj = new HistoPrepPaie();

        $obj->setPrime1Mai(10.092018);
        $this->assertEquals(10.092018, $obj->getPrime1Mai());
    }

    /**
     * Tests the setPrime2() method.
     *
     * @return void
     */
    public function testSetPrime2() {

        $obj = new HistoPrepPaie();

        $obj->setPrime2(10.092018);
        $this->assertEquals(10.092018, $obj->getPrime2());
    }

    /**
     * Tests the setPrime3() method.
     *
     * @return void
     */
    public function testSetPrime3() {

        $obj = new HistoPrepPaie();

        $obj->setPrime3(10.092018);
        $this->assertEquals(10.092018, $obj->getPrime3());
    }

    /**
     * Tests the setPrime4() method.
     *
     * @return void
     */
    public function testSetPrime4() {

        $obj = new HistoPrepPaie();

        $obj->setPrime4(10.092018);
        $this->assertEquals(10.092018, $obj->getPrime4());
    }

    /**
     * Tests the setPrime5() method.
     *
     * @return void
     */
    public function testSetPrime5() {

        $obj = new HistoPrepPaie();

        $obj->setPrime5(10.092018);
        $this->assertEquals(10.092018, $obj->getPrime5());
    }

    /**
     * Tests the setPrime6() method.
     *
     * @return void
     */
    public function testSetPrime6() {

        $obj = new HistoPrepPaie();

        $obj->setPrime6(10.092018);
        $this->assertEquals(10.092018, $obj->getPrime6());
    }

    /**
     * Tests the setPrime7() method.
     *
     * @return void
     */
    public function testSetPrime7() {

        $obj = new HistoPrepPaie();

        $obj->setPrime7(10.092018);
        $this->assertEquals(10.092018, $obj->getPrime7());
    }

    /**
     * Tests the setPrime8() method.
     *
     * @return void
     */
    public function testSetPrime8() {

        $obj = new HistoPrepPaie();

        $obj->setPrime8(10.092018);
        $this->assertEquals(10.092018, $obj->getPrime8());
    }

    /**
     * Tests the setPrime9() method.
     *
     * @return void
     */
    public function testSetPrime9() {

        $obj = new HistoPrepPaie();

        $obj->setPrime9(10.092018);
        $this->assertEquals(10.092018, $obj->getPrime9());
    }

    /**
     * Tests the setPrimeHComplMaj() method.
     *
     * @return void
     */
    public function testSetPrimeHComplMaj() {

        $obj = new HistoPrepPaie();

        $obj->setPrimeHComplMaj(10.092018);
        $this->assertEquals(10.092018, $obj->getPrimeHComplMaj());
    }

    /**
     * Tests the setPrimeHDim2Normal() method.
     *
     * @return void
     */
    public function testSetPrimeHDim2Normal() {

        $obj = new HistoPrepPaie();

        $obj->setPrimeHDim2Normal(10.092018);
        $this->assertEquals(10.092018, $obj->getPrimeHDim2Normal());
    }

    /**
     * Tests the setPrimeHDimExcept() method.
     *
     * @return void
     */
    public function testSetPrimeHDimExcept() {

        $obj = new HistoPrepPaie();

        $obj->setPrimeHDimExcept(10.092018);
        $this->assertEquals(10.092018, $obj->getPrimeHDimExcept());
    }

    /**
     * Tests the setPrimeHDimNormal() method.
     *
     * @return void
     */
    public function testSetPrimeHDimNormal() {

        $obj = new HistoPrepPaie();

        $obj->setPrimeHDimNormal(10.092018);
        $this->assertEquals(10.092018, $obj->getPrimeHDimNormal());
    }

    /**
     * Tests the setPrimeHNuit2Normal() method.
     *
     * @return void
     */
    public function testSetPrimeHNuit2Normal() {

        $obj = new HistoPrepPaie();

        $obj->setPrimeHNuit2Normal(10.092018);
        $this->assertEquals(10.092018, $obj->getPrimeHNuit2Normal());
    }

    /**
     * Tests the setPrimeHNuitExcept() method.
     *
     * @return void
     */
    public function testSetPrimeHNuitExcept() {

        $obj = new HistoPrepPaie();

        $obj->setPrimeHNuitExcept(10.092018);
        $this->assertEquals(10.092018, $obj->getPrimeHNuitExcept());
    }

    /**
     * Tests the setPrimeHNuitNormal() method.
     *
     * @return void
     */
    public function testSetPrimeHNuitNormal() {

        $obj = new HistoPrepPaie();

        $obj->setPrimeHNuitNormal(10.092018);
        $this->assertEquals(10.092018, $obj->getPrimeHNuitNormal());
    }

    /**
     * Tests the setPrimeJF2Normal() method.
     *
     * @return void
     */
    public function testSetPrimeJF2Normal() {

        $obj = new HistoPrepPaie();

        $obj->setPrimeJF2Normal(10.092018);
        $this->assertEquals(10.092018, $obj->getPrimeJF2Normal());
    }

    /**
     * Tests the setPrimeJFExcept() method.
     *
     * @return void
     */
    public function testSetPrimeJFExcept() {

        $obj = new HistoPrepPaie();

        $obj->setPrimeJFExcept(10.092018);
        $this->assertEquals(10.092018, $obj->getPrimeJFExcept());
    }

    /**
     * Tests the setPrimeJFNormal() method.
     *
     * @return void
     */
    public function testSetPrimeJFNormal() {

        $obj = new HistoPrepPaie();

        $obj->setPrimeJFNormal(10.092018);
        $this->assertEquals(10.092018, $obj->getPrimeJFNormal());
    }

    /**
     * Tests the setTempsPasse() method.
     *
     * @return void
     */
    public function testSetTempsPasse() {

        $obj = new HistoPrepPaie();

        $obj->setTempsPasse(10.092018);
        $this->assertEquals(10.092018, $obj->getTempsPasse());
    }

    /**
     * Tests the setTotalHAnal() method.
     *
     * @return void
     */
    public function testSetTotalHAnal() {

        $obj = new HistoPrepPaie();

        $obj->setTotalHAnal(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalHAnal());
    }

    /**
     * Tests the setTxHoraireRS() method.
     *
     * @return void
     */
    public function testSetTxHoraireRS() {

        $obj = new HistoPrepPaie();

        $obj->setTxHoraireRS(10.092018);
        $this->assertEquals(10.092018, $obj->getTxHoraireRS());
    }

    /**
     * Tests the setTxHoraireTP() method.
     *
     * @return void
     */
    public function testSetTxHoraireTP() {

        $obj = new HistoPrepPaie();

        $obj->setTxHoraireTP(10.092018);
        $this->assertEquals(10.092018, $obj->getTxHoraireTP());
    }

    /**
     * Tests the setYaEuSaisieManuelle() method.
     *
     * @return void
     */
    public function testSetYaEuSaisieManuelle() {

        $obj = new HistoPrepPaie();

        $obj->setYaEuSaisieManuelle(true);
        $this->assertEquals(true, $obj->getYaEuSaisieManuelle());
    }
}
