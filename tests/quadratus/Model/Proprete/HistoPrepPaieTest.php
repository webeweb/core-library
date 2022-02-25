<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\Proprete\HistoPrepPaie;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Histo prep paie test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class HistoPrepPaieTest extends AbstractTestCase {

    /**
     * Tests setCodeEmploye()
     *
     * @return void
     */
    public function testSetCodeEmploye(): void {

        $obj = new HistoPrepPaie();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests setContingentHSupReposComp()
     *
     * @return void
     */
    public function testSetContingentHSupReposComp(): void {

        $obj = new HistoPrepPaie();

        $obj->setContingentHSupReposComp(10.092018);
        $this->assertEquals(10.092018, $obj->getContingentHSupReposComp());
    }

    /**
     * Tests setDroitCp()
     *
     * @return void
     */
    public function testSetDroitCp(): void {

        $obj = new HistoPrepPaie();

        $obj->setDroitCp(10.092018);
        $this->assertEquals(10.092018, $obj->getDroitCp());
    }

    /**
     * Tests setEtat()
     *
     * @return void
     */
    public function testSetEtat(): void {

        $obj = new HistoPrepPaie();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests setHPrev()
     *
     * @return void
     */
    public function testSetHPrev(): void {

        $obj = new HistoPrepPaie();

        $obj->setHPrev(10.092018);
        $this->assertEquals(10.092018, $obj->getHPrev());
    }

    /**
     * Tests setHRempl()
     *
     * @return void
     */
    public function testSetHRempl(): void {

        $obj = new HistoPrepPaie();

        $obj->setHRempl(10.092018);
        $this->assertEquals(10.092018, $obj->getHRempl());
    }

    /**
     * Tests setHSurcroit()
     *
     * @return void
     */
    public function testSetHSurcroit(): void {

        $obj = new HistoPrepPaie();

        $obj->setHSurcroit(10.092018);
        $this->assertEquals(10.092018, $obj->getHSurcroit());
    }

    /**
     * Tests setHabs0()
     *
     * @return void
     */
    public function testSetHabs0(): void {

        $obj = new HistoPrepPaie();

        $obj->setHabs0(10.092018);
        $this->assertEquals(10.092018, $obj->getHabs0());
    }

    /**
     * Tests setHabs1()
     *
     * @return void
     */
    public function testSetHabs1(): void {

        $obj = new HistoPrepPaie();

        $obj->setHabs1(10.092018);
        $this->assertEquals(10.092018, $obj->getHabs1());
    }

    /**
     * Tests setHabs2()
     *
     * @return void
     */
    public function testSetHabs2(): void {

        $obj = new HistoPrepPaie();

        $obj->setHabs2(10.092018);
        $this->assertEquals(10.092018, $obj->getHabs2());
    }

    /**
     * Tests setHabs3()
     *
     * @return void
     */
    public function testSetHabs3(): void {

        $obj = new HistoPrepPaie();

        $obj->setHabs3(10.092018);
        $this->assertEquals(10.092018, $obj->getHabs3());
    }

    /**
     * Tests setHabs4()
     *
     * @return void
     */
    public function testSetHabs4(): void {

        $obj = new HistoPrepPaie();

        $obj->setHabs4(10.092018);
        $this->assertEquals(10.092018, $obj->getHabs4());
    }

    /**
     * Tests setHabs5()
     *
     * @return void
     */
    public function testSetHabs5(): void {

        $obj = new HistoPrepPaie();

        $obj->setHabs5(10.092018);
        $this->assertEquals(10.092018, $obj->getHabs5());
    }

    /**
     * Tests setHabs6()
     *
     * @return void
     */
    public function testSetHabs6(): void {

        $obj = new HistoPrepPaie();

        $obj->setHabs6(10.092018);
        $this->assertEquals(10.092018, $obj->getHabs6());
    }

    /**
     * Tests setHabs7()
     *
     * @return void
     */
    public function testSetHabs7(): void {

        $obj = new HistoPrepPaie();

        $obj->setHabs7(10.092018);
        $this->assertEquals(10.092018, $obj->getHabs7());
    }

    /**
     * Tests setHabs8()
     *
     * @return void
     */
    public function testSetHabs8(): void {

        $obj = new HistoPrepPaie();

        $obj->setHabs8(10.092018);
        $this->assertEquals(10.092018, $obj->getHabs8());
    }

    /**
     * Tests setHabs9()
     *
     * @return void
     */
    public function testSetHabs9(): void {

        $obj = new HistoPrepPaie();

        $obj->setHabs9(10.092018);
        $this->assertEquals(10.092018, $obj->getHabs9());
    }

    /**
     * Tests setHacp()
     *
     * @return void
     */
    public function testSetHacp(): void {

        $obj = new HistoPrepPaie();

        $obj->setHacp(10.092018);
        $this->assertEquals(10.092018, $obj->getHacp());
    }

    /**
     * Tests setHc()
     *
     * @return void
     */
    public function testSetHc(): void {

        $obj = new HistoPrepPaie();

        $obj->setHc(10.092018);
        $this->assertEquals(10.092018, $obj->getHc());
    }

    /**
     * Tests setHeuresRcAcquises()
     *
     * @return void
     */
    public function testSetHeuresRcAcquises(): void {

        $obj = new HistoPrepPaie();

        $obj->setHeuresRcAcquises(10.092018);
        $this->assertEquals(10.092018, $obj->getHeuresRcAcquises());
    }

    /**
     * Tests setHeuresRrAcquises()
     *
     * @return void
     */
    public function testSetHeuresRrAcquises(): void {

        $obj = new HistoPrepPaie();

        $obj->setHeuresRrAcquises(10.092018);
        $this->assertEquals(10.092018, $obj->getHeuresRrAcquises());
    }

    /**
     * Tests setHs1()
     *
     * @return void
     */
    public function testSetHs1(): void {

        $obj = new HistoPrepPaie();

        $obj->setHs1(10.092018);
        $this->assertEquals(10.092018, $obj->getHs1());
    }

    /**
     * Tests setHs2()
     *
     * @return void
     */
    public function testSetHs2(): void {

        $obj = new HistoPrepPaie();

        $obj->setHs2(10.092018);
        $this->assertEquals(10.092018, $obj->getHs2());
    }

    /**
     * Tests setHs3()
     *
     * @return void
     */
    public function testSetHs3(): void {

        $obj = new HistoPrepPaie();

        $obj->setHs3(10.092018);
        $this->assertEquals(10.092018, $obj->getHs3());
    }

    /**
     * Tests setHs35Heures()
     *
     * @return void
     */
    public function testSetHs35Heures(): void {

        $obj = new HistoPrepPaie();

        $obj->setHs35Heures(10.092018);
        $this->assertEquals(10.092018, $obj->getHs35Heures());
    }

    /**
     * Tests setJacp()
     *
     * @return void
     */
    public function testSetJacp(): void {

        $obj = new HistoPrepPaie();

        $obj->setJacp(10);
        $this->assertEquals(10, $obj->getJacp());
    }

    /**
     * Tests setJoursRttAcquis()
     *
     * @return void
     */
    public function testSetJoursRttAcquis(): void {

        $obj = new HistoPrepPaie();

        $obj->setJoursRttAcquis(10.092018);
        $this->assertEquals(10.092018, $obj->getJoursRttAcquis());
    }

    /**
     * Tests setMensualisation()
     *
     * @return void
     */
    public function testSetMensualisation(): void {

        $obj = new HistoPrepPaie();

        $obj->setMensualisation(10.092018);
        $this->assertEquals(10.092018, $obj->getMensualisation());
    }

    /**
     * Tests setMtPrime1Chantier()
     *
     * @return void
     */
    public function testSetMtPrime1Chantier(): void {

        $obj = new HistoPrepPaie();

        $obj->setMtPrime1Chantier(10.092018);
        $this->assertEquals(10.092018, $obj->getMtPrime1Chantier());
    }

    /**
     * Tests setMtPrime2Chantier()
     *
     * @return void
     */
    public function testSetMtPrime2Chantier(): void {

        $obj = new HistoPrepPaie();

        $obj->setMtPrime2Chantier(10.092018);
        $this->assertEquals(10.092018, $obj->getMtPrime2Chantier());
    }

    /**
     * Tests setMtPrime3Chantier()
     *
     * @return void
     */
    public function testSetMtPrime3Chantier(): void {

        $obj = new HistoPrepPaie();

        $obj->setMtPrime3Chantier(10.092018);
        $this->assertEquals(10.092018, $obj->getMtPrime3Chantier());
    }

    /**
     * Tests setMtPrimeForfait()
     *
     * @return void
     */
    public function testSetMtPrimeForfait(): void {

        $obj = new HistoPrepPaie();

        $obj->setMtPrimeForfait(10.092018);
        $this->assertEquals(10.092018, $obj->getMtPrimeForfait());
    }

    /**
     * Tests setNbHeuresRs()
     *
     * @return void
     */
    public function testSetNbHeuresRs(): void {

        $obj = new HistoPrepPaie();

        $obj->setNbHeuresRs(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeuresRs());
    }

    /**
     * Tests setNbHeuresTp()
     *
     * @return void
     */
    public function testSetNbHeuresTp(): void {

        $obj = new HistoPrepPaie();

        $obj->setNbHeuresTp(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeuresTp());
    }

    /**
     * Tests setNbPaniers()
     *
     * @return void
     */
    public function testSetNbPaniers(): void {

        $obj = new HistoPrepPaie();

        $obj->setNbPaniers(10.092018);
        $this->assertEquals(10.092018, $obj->getNbPaniers());
    }

    /**
     * Tests setPeriode()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode(): void {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new HistoPrepPaie();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests setPrime1()
     *
     * @return void
     */
    public function testSetPrime1(): void {

        $obj = new HistoPrepPaie();

        $obj->setPrime1(10.092018);
        $this->assertEquals(10.092018, $obj->getPrime1());
    }

    /**
     * Tests setPrime10()
     *
     * @return void
     */
    public function testSetPrime10(): void {

        $obj = new HistoPrepPaie();

        $obj->setPrime10(10.092018);
        $this->assertEquals(10.092018, $obj->getPrime10());
    }

    /**
     * Tests setPrime1Mai()
     *
     * @return void
     */
    public function testSetPrime1Mai(): void {

        $obj = new HistoPrepPaie();

        $obj->setPrime1Mai(10.092018);
        $this->assertEquals(10.092018, $obj->getPrime1Mai());
    }

    /**
     * Tests setPrime2()
     *
     * @return void
     */
    public function testSetPrime2(): void {

        $obj = new HistoPrepPaie();

        $obj->setPrime2(10.092018);
        $this->assertEquals(10.092018, $obj->getPrime2());
    }

    /**
     * Tests setPrime3()
     *
     * @return void
     */
    public function testSetPrime3(): void {

        $obj = new HistoPrepPaie();

        $obj->setPrime3(10.092018);
        $this->assertEquals(10.092018, $obj->getPrime3());
    }

    /**
     * Tests setPrime4()
     *
     * @return void
     */
    public function testSetPrime4(): void {

        $obj = new HistoPrepPaie();

        $obj->setPrime4(10.092018);
        $this->assertEquals(10.092018, $obj->getPrime4());
    }

    /**
     * Tests setPrime5()
     *
     * @return void
     */
    public function testSetPrime5(): void {

        $obj = new HistoPrepPaie();

        $obj->setPrime5(10.092018);
        $this->assertEquals(10.092018, $obj->getPrime5());
    }

    /**
     * Tests setPrime6()
     *
     * @return void
     */
    public function testSetPrime6(): void {

        $obj = new HistoPrepPaie();

        $obj->setPrime6(10.092018);
        $this->assertEquals(10.092018, $obj->getPrime6());
    }

    /**
     * Tests setPrime7()
     *
     * @return void
     */
    public function testSetPrime7(): void {

        $obj = new HistoPrepPaie();

        $obj->setPrime7(10.092018);
        $this->assertEquals(10.092018, $obj->getPrime7());
    }

    /**
     * Tests setPrime8()
     *
     * @return void
     */
    public function testSetPrime8(): void {

        $obj = new HistoPrepPaie();

        $obj->setPrime8(10.092018);
        $this->assertEquals(10.092018, $obj->getPrime8());
    }

    /**
     * Tests setPrime9()
     *
     * @return void
     */
    public function testSetPrime9(): void {

        $obj = new HistoPrepPaie();

        $obj->setPrime9(10.092018);
        $this->assertEquals(10.092018, $obj->getPrime9());
    }

    /**
     * Tests setPrimeHComplMaj()
     *
     * @return void
     */
    public function testSetPrimeHComplMaj(): void {

        $obj = new HistoPrepPaie();

        $obj->setPrimeHComplMaj(10.092018);
        $this->assertEquals(10.092018, $obj->getPrimeHComplMaj());
    }

    /**
     * Tests setPrimeHDim2Normal()
     *
     * @return void
     */
    public function testSetPrimeHDim2Normal(): void {

        $obj = new HistoPrepPaie();

        $obj->setPrimeHDim2Normal(10.092018);
        $this->assertEquals(10.092018, $obj->getPrimeHDim2Normal());
    }

    /**
     * Tests setPrimeHDimExcept()
     *
     * @return void
     */
    public function testSetPrimeHDimExcept(): void {

        $obj = new HistoPrepPaie();

        $obj->setPrimeHDimExcept(10.092018);
        $this->assertEquals(10.092018, $obj->getPrimeHDimExcept());
    }

    /**
     * Tests setPrimeHDimNormal()
     *
     * @return void
     */
    public function testSetPrimeHDimNormal(): void {

        $obj = new HistoPrepPaie();

        $obj->setPrimeHDimNormal(10.092018);
        $this->assertEquals(10.092018, $obj->getPrimeHDimNormal());
    }

    /**
     * Tests setPrimeHNuit2Normal()
     *
     * @return void
     */
    public function testSetPrimeHNuit2Normal(): void {

        $obj = new HistoPrepPaie();

        $obj->setPrimeHNuit2Normal(10.092018);
        $this->assertEquals(10.092018, $obj->getPrimeHNuit2Normal());
    }

    /**
     * Tests setPrimeHNuitExcept()
     *
     * @return void
     */
    public function testSetPrimeHNuitExcept(): void {

        $obj = new HistoPrepPaie();

        $obj->setPrimeHNuitExcept(10.092018);
        $this->assertEquals(10.092018, $obj->getPrimeHNuitExcept());
    }

    /**
     * Tests setPrimeHNuitNormal()
     *
     * @return void
     */
    public function testSetPrimeHNuitNormal(): void {

        $obj = new HistoPrepPaie();

        $obj->setPrimeHNuitNormal(10.092018);
        $this->assertEquals(10.092018, $obj->getPrimeHNuitNormal());
    }

    /**
     * Tests setPrimeJf2Normal()
     *
     * @return void
     */
    public function testSetPrimeJf2Normal(): void {

        $obj = new HistoPrepPaie();

        $obj->setPrimeJf2Normal(10.092018);
        $this->assertEquals(10.092018, $obj->getPrimeJf2Normal());
    }

    /**
     * Tests setPrimeJfExcept()
     *
     * @return void
     */
    public function testSetPrimeJfExcept(): void {

        $obj = new HistoPrepPaie();

        $obj->setPrimeJfExcept(10.092018);
        $this->assertEquals(10.092018, $obj->getPrimeJfExcept());
    }

    /**
     * Tests setPrimeJfNormal()
     *
     * @return void
     */
    public function testSetPrimeJfNormal(): void {

        $obj = new HistoPrepPaie();

        $obj->setPrimeJfNormal(10.092018);
        $this->assertEquals(10.092018, $obj->getPrimeJfNormal());
    }

    /**
     * Tests setTempsPasse()
     *
     * @return void
     */
    public function testSetTempsPasse(): void {

        $obj = new HistoPrepPaie();

        $obj->setTempsPasse(10.092018);
        $this->assertEquals(10.092018, $obj->getTempsPasse());
    }

    /**
     * Tests setTotalHAnal()
     *
     * @return void
     */
    public function testSetTotalHAnal(): void {

        $obj = new HistoPrepPaie();

        $obj->setTotalHAnal(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalHAnal());
    }

    /**
     * Tests setTxHoraireRs()
     *
     * @return void
     */
    public function testSetTxHoraireRs(): void {

        $obj = new HistoPrepPaie();

        $obj->setTxHoraireRs(10.092018);
        $this->assertEquals(10.092018, $obj->getTxHoraireRs());
    }

    /**
     * Tests setTxHoraireTp()
     *
     * @return void
     */
    public function testSetTxHoraireTp(): void {

        $obj = new HistoPrepPaie();

        $obj->setTxHoraireTp(10.092018);
        $this->assertEquals(10.092018, $obj->getTxHoraireTp());
    }

    /**
     * Tests setYaEuSaisieManuelle()
     *
     * @return void
     */
    public function testSetYaEuSaisieManuelle(): void {

        $obj = new HistoPrepPaie();

        $obj->setYaEuSaisieManuelle(true);
        $this->assertEquals(true, $obj->getYaEuSaisieManuelle());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new HistoPrepPaie();

        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getContingentHSupReposComp());
        $this->assertNull($obj->getDroitCp());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getHabs0());
        $this->assertNull($obj->getHabs1());
        $this->assertNull($obj->getHabs2());
        $this->assertNull($obj->getHabs3());
        $this->assertNull($obj->getHabs4());
        $this->assertNull($obj->getHabs5());
        $this->assertNull($obj->getHabs6());
        $this->assertNull($obj->getHabs7());
        $this->assertNull($obj->getHabs8());
        $this->assertNull($obj->getHabs9());
        $this->assertNull($obj->getHacp());
        $this->assertNull($obj->getHc());
        $this->assertNull($obj->getHPrev());
        $this->assertNull($obj->getHRempl());
        $this->assertNull($obj->getHs1());
        $this->assertNull($obj->getHs2());
        $this->assertNull($obj->getHs3());
        $this->assertNull($obj->getHs35Heures());
        $this->assertNull($obj->getHSurcroit());
        $this->assertNull($obj->getHeuresRcAcquises());
        $this->assertNull($obj->getHeuresRrAcquises());
        $this->assertNull($obj->getJacp());
        $this->assertNull($obj->getJoursRttAcquis());
        $this->assertNull($obj->getMensualisation());
        $this->assertNull($obj->getMtPrime1Chantier());
        $this->assertNull($obj->getMtPrime2Chantier());
        $this->assertNull($obj->getMtPrime3Chantier());
        $this->assertNull($obj->getMtPrimeForfait());
        $this->assertNull($obj->getNbHeuresRs());
        $this->assertNull($obj->getNbHeuresTp());
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
        $this->assertNull($obj->getPrimeJf2Normal());
        $this->assertNull($obj->getPrimeJfExcept());
        $this->assertNull($obj->getPrimeJfNormal());
        $this->assertNull($obj->getTempsPasse());
        $this->assertNull($obj->getTotalHAnal());
        $this->assertNull($obj->getTxHoraireRs());
        $this->assertNull($obj->getTxHoraireTp());
        $this->assertNull($obj->getYaEuSaisieManuelle());
    }
}
