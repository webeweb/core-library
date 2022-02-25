<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use WBW\Library\Quadratus\Model\QPaie\EmpDadsuRectif;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Emp dadsu rectif test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class EmpDadsuRectifTest extends AbstractTestCase {

    /**
     * Tests setActif()
     *
     * @return void
     */
    public function testSetActif(): void {

        $obj = new EmpDadsuRectif();

        $obj->setActif(true);
        $this->assertEquals(true, $obj->getActif());
    }

    /**
     * Tests setActionsGratuitesNbre()
     *
     * @return void
     */
    public function testSetActionsGratuitesNbre(): void {

        $obj = new EmpDadsuRectif();

        $obj->setActionsGratuitesNbre(10.092018);
        $this->assertEquals(10.092018, $obj->getActionsGratuitesNbre());
    }

    /**
     * Tests setActionsGratuitesValeurU()
     *
     * @return void
     */
    public function testSetActionsGratuitesValeurU(): void {

        $obj = new EmpDadsuRectif();

        $obj->setActionsGratuitesValeurU(10.092018);
        $this->assertEquals(10.092018, $obj->getActionsGratuitesValeurU());
    }

    /**
     * Tests setAutresSommesExoMnt1()
     *
     * @return void
     */
    public function testSetAutresSommesExoMnt1(): void {

        $obj = new EmpDadsuRectif();

        $obj->setAutresSommesExoMnt1(10.092018);
        $this->assertEquals(10.092018, $obj->getAutresSommesExoMnt1());
    }

    /**
     * Tests setAutresSommesExoMnt2()
     *
     * @return void
     */
    public function testSetAutresSommesExoMnt2(): void {

        $obj = new EmpDadsuRectif();

        $obj->setAutresSommesExoMnt2(10.092018);
        $this->assertEquals(10.092018, $obj->getAutresSommesExoMnt2());
    }

    /**
     * Tests setAutresSommesExoMnt3()
     *
     * @return void
     */
    public function testSetAutresSommesExoMnt3(): void {

        $obj = new EmpDadsuRectif();

        $obj->setAutresSommesExoMnt3(10.092018);
        $this->assertEquals(10.092018, $obj->getAutresSommesExoMnt3());
    }

    /**
     * Tests setAutresSommesExoMnt4()
     *
     * @return void
     */
    public function testSetAutresSommesExoMnt4(): void {

        $obj = new EmpDadsuRectif();

        $obj->setAutresSommesExoMnt4(10.092018);
        $this->assertEquals(10.092018, $obj->getAutresSommesExoMnt4());
    }

    /**
     * Tests setBaseExoBrut1()
     *
     * @return void
     */
    public function testSetBaseExoBrut1(): void {

        $obj = new EmpDadsuRectif();

        $obj->setBaseExoBrut1(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseExoBrut1());
    }

    /**
     * Tests setBaseExoBrut2()
     *
     * @return void
     */
    public function testSetBaseExoBrut2(): void {

        $obj = new EmpDadsuRectif();

        $obj->setBaseExoBrut2(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseExoBrut2());
    }

    /**
     * Tests setBaseExoBrut3()
     *
     * @return void
     */
    public function testSetBaseExoBrut3(): void {

        $obj = new EmpDadsuRectif();

        $obj->setBaseExoBrut3(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseExoBrut3());
    }

    /**
     * Tests setBaseExoPlaf1()
     *
     * @return void
     */
    public function testSetBaseExoPlaf1(): void {

        $obj = new EmpDadsuRectif();

        $obj->setBaseExoPlaf1(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseExoPlaf1());
    }

    /**
     * Tests setBaseExoPlaf2()
     *
     * @return void
     */
    public function testSetBaseExoPlaf2(): void {

        $obj = new EmpDadsuRectif();

        $obj->setBaseExoPlaf2(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseExoPlaf2());
    }

    /**
     * Tests setBaseExoPlaf3()
     *
     * @return void
     */
    public function testSetBaseExoPlaf3(): void {

        $obj = new EmpDadsuRectif();

        $obj->setBaseExoPlaf3(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseExoPlaf3());
    }

    /**
     * Tests setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new EmpDadsuRectif();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests setCsgSpecif()
     *
     * @return void
     */
    public function testSetCsgSpecif(): void {

        $obj = new EmpDadsuRectif();

        $obj->setCsgSpecif(10.092018);
        $this->assertEquals(10.092018, $obj->getCsgSpecif());
    }

    /**
     * Tests setEpargneSalMnt1()
     *
     * @return void
     */
    public function testSetEpargneSalMnt1(): void {

        $obj = new EmpDadsuRectif();

        $obj->setEpargneSalMnt1(10.092018);
        $this->assertEquals(10.092018, $obj->getEpargneSalMnt1());
    }

    /**
     * Tests setEpargneSalMnt2()
     *
     * @return void
     */
    public function testSetEpargneSalMnt2(): void {

        $obj = new EmpDadsuRectif();

        $obj->setEpargneSalMnt2(10.092018);
        $this->assertEquals(10.092018, $obj->getEpargneSalMnt2());
    }

    /**
     * Tests setEpargneSalMnt3()
     *
     * @return void
     */
    public function testSetEpargneSalMnt3(): void {

        $obj = new EmpDadsuRectif();

        $obj->setEpargneSalMnt3(10.092018);
        $this->assertEquals(10.092018, $obj->getEpargneSalMnt3());
    }

    /**
     * Tests setEpargneSalMnt4()
     *
     * @return void
     */
    public function testSetEpargneSalMnt4(): void {

        $obj = new EmpDadsuRectif();

        $obj->setEpargneSalMnt4(10.092018);
        $this->assertEquals(10.092018, $obj->getEpargneSalMnt4());
    }

    /**
     * Tests setGpecMntExoCotSecu()
     *
     * @return void
     */
    public function testSetGpecMntExoCotSecu(): void {

        $obj = new EmpDadsuRectif();

        $obj->setGpecMntExoCotSecu(10.092018);
        $this->assertEquals(10.092018, $obj->getGpecMntExoCotSecu());
    }

    /**
     * Tests setGpecMntExoCsgcrds()
     *
     * @return void
     */
    public function testSetGpecMntExoCsgcrds(): void {

        $obj = new EmpDadsuRectif();

        $obj->setGpecMntExoCsgcrds(10.092018);
        $this->assertEquals(10.092018, $obj->getGpecMntExoCsgcrds());
    }

    /**
     * Tests setIndCp()
     *
     * @return void
     */
    public function testSetIndCp(): void {

        $obj = new EmpDadsuRectif();

        $obj->setIndCp(10.092018);
        $this->assertEquals(10.092018, $obj->getIndCp());
    }

    /**
     * Tests setIndemnCpPlaf()
     *
     * @return void
     */
    public function testSetIndemnCpPlaf(): void {

        $obj = new EmpDadsuRectif();

        $obj->setIndemnCpPlaf(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnCpPlaf());
    }

    /**
     * Tests setIndemnImpat()
     *
     * @return void
     */
    public function testSetIndemnImpat(): void {

        $obj = new EmpDadsuRectif();

        $obj->setIndemnImpat(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnImpat());
    }

    /**
     * Tests setIndemnRuptureMnt1()
     *
     * @return void
     */
    public function testSetIndemnRuptureMnt1(): void {

        $obj = new EmpDadsuRectif();

        $obj->setIndemnRuptureMnt1(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnRuptureMnt1());
    }

    /**
     * Tests setIndemnRuptureMnt2()
     *
     * @return void
     */
    public function testSetIndemnRuptureMnt2(): void {

        $obj = new EmpDadsuRectif();

        $obj->setIndemnRuptureMnt2(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnRuptureMnt2());
    }

    /**
     * Tests setIndiceRectif()
     *
     * @return void
     */
    public function testSetIndiceRectif(): void {

        $obj = new EmpDadsuRectif();

        $obj->setIndiceRectif(10);
        $this->assertEquals(10, $obj->getIndiceRectif());
    }

    /**
     * Tests setMontantBPlaf()
     *
     * @return void
     */
    public function testSetMontantBPlaf(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantBPlaf(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBPlaf());
    }

    /**
     * Tests setMontantBPlaf2()
     *
     * @return void
     */
    public function testSetMontantBPlaf2(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantBPlaf2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBPlaf2());
    }

    /**
     * Tests setMontantBPlaf3()
     *
     * @return void
     */
    public function testSetMontantBPlaf3(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantBPlaf3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBPlaf3());
    }

    /**
     * Tests setMontantBPlaf4()
     *
     * @return void
     */
    public function testSetMontantBPlaf4(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantBPlaf4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBPlaf4());
    }

    /**
     * Tests setMontantBPlaf5()
     *
     * @return void
     */
    public function testSetMontantBPlaf5(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantBPlaf5(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBPlaf5());
    }

    /**
     * Tests setMontantBrut()
     *
     * @return void
     */
    public function testSetMontantBrut(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBrut());
    }

    /**
     * Tests setMontantBrut2()
     *
     * @return void
     */
    public function testSetMontantBrut2(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantBrut2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBrut2());
    }

    /**
     * Tests setMontantBrut3()
     *
     * @return void
     */
    public function testSetMontantBrut3(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantBrut3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBrut3());
    }

    /**
     * Tests setMontantBrut4()
     *
     * @return void
     */
    public function testSetMontantBrut4(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantBrut4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBrut4());
    }

    /**
     * Tests setMontantBrut5()
     *
     * @return void
     */
    public function testSetMontantBrut5(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantBrut5(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBrut5());
    }

    /**
     * Tests setMontantSommeIsolBrut()
     *
     * @return void
     */
    public function testSetMontantSommeIsolBrut(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantSommeIsolBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolBrut());
    }

    /**
     * Tests setMontantSommeIsolBrut2()
     *
     * @return void
     */
    public function testSetMontantSommeIsolBrut2(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantSommeIsolBrut2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolBrut2());
    }

    /**
     * Tests setMontantSommeIsolBrut3()
     *
     * @return void
     */
    public function testSetMontantSommeIsolBrut3(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantSommeIsolBrut3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolBrut3());
    }

    /**
     * Tests setMontantSommeIsolBrut4()
     *
     * @return void
     */
    public function testSetMontantSommeIsolBrut4(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantSommeIsolBrut4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolBrut4());
    }

    /**
     * Tests setMontantSommeIsolBrut5()
     *
     * @return void
     */
    public function testSetMontantSommeIsolBrut5(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantSommeIsolBrut5(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolBrut5());
    }

    /**
     * Tests setMontantSommeIsolPlaf()
     *
     * @return void
     */
    public function testSetMontantSommeIsolPlaf(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantSommeIsolPlaf(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf());
    }

    /**
     * Tests setMontantSommeIsolPlaf2()
     *
     * @return void
     */
    public function testSetMontantSommeIsolPlaf2(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantSommeIsolPlaf2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf2());
    }

    /**
     * Tests setMontantSommeIsolPlaf3()
     *
     * @return void
     */
    public function testSetMontantSommeIsolPlaf3(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantSommeIsolPlaf3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf3());
    }

    /**
     * Tests setMontantSommeIsolPlaf4()
     *
     * @return void
     */
    public function testSetMontantSommeIsolPlaf4(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantSommeIsolPlaf4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf4());
    }

    /**
     * Tests setMontantSommeIsolPlaf5()
     *
     * @return void
     */
    public function testSetMontantSommeIsolPlaf5(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantSommeIsolPlaf5(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf5());
    }

    /**
     * Tests setNumero()
     *
     * @return void
     */
    public function testSetNumero(): void {

        $obj = new EmpDadsuRectif();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }

    /**
     * Tests setNumeroOrdre()
     *
     * @return void
     */
    public function testSetNumeroOrdre(): void {

        $obj = new EmpDadsuRectif();

        $obj->setNumeroOrdre(10);
        $this->assertEquals(10, $obj->getNumeroOrdre());
    }

    /**
     * Tests setParticipPatronAvtgeMnt1()
     *
     * @return void
     */
    public function testSetParticipPatronAvtgeMnt1(): void {

        $obj = new EmpDadsuRectif();

        $obj->setParticipPatronAvtgeMnt1(10.092018);
        $this->assertEquals(10.092018, $obj->getParticipPatronAvtgeMnt1());
    }

    /**
     * Tests setParticipPatronAvtgeMnt2()
     *
     * @return void
     */
    public function testSetParticipPatronAvtgeMnt2(): void {

        $obj = new EmpDadsuRectif();

        $obj->setParticipPatronAvtgeMnt2(10.092018);
        $this->assertEquals(10.092018, $obj->getParticipPatronAvtgeMnt2());
    }

    /**
     * Tests setParticipServPers()
     *
     * @return void
     */
    public function testSetParticipServPers(): void {

        $obj = new EmpDadsuRectif();

        $obj->setParticipServPers(10.092018);
        $this->assertEquals(10.092018, $obj->getParticipServPers());
    }

    /**
     * Tests setTaxeSalaire()
     *
     * @return void
     */
    public function testSetTaxeSalaire(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTaxeSalaire(10.092018);
        $this->assertEquals(10.092018, $obj->getTaxeSalaire());
    }

    /**
     * Tests setTds100()
     *
     * @return void
     */
    public function testSetTds100(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds100(10.092018);
        $this->assertEquals(10.092018, $obj->getTds100());
    }

    /**
     * Tests setTds103()
     *
     * @return void
     */
    public function testSetTds103(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds103(10.092018);
        $this->assertEquals(10.092018, $obj->getTds103());
    }

    /**
     * Tests setTds105()
     *
     * @return void
     */
    public function testSetTds105(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds105(10.092018);
        $this->assertEquals(10.092018, $obj->getTds105());
    }

    /**
     * Tests setTds107()
     *
     * @return void
     */
    public function testSetTds107(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds107(true);
        $this->assertEquals(true, $obj->getTds107());
    }

    /**
     * Tests setTds108()
     *
     * @return void
     */
    public function testSetTds108(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds108(true);
        $this->assertEquals(true, $obj->getTds108());
    }

    /**
     * Tests setTds109()
     *
     * @return void
     */
    public function testSetTds109(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds109(true);
        $this->assertEquals(true, $obj->getTds109());
    }

    /**
     * Tests setTds110()
     *
     * @return void
     */
    public function testSetTds110(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds110(true);
        $this->assertEquals(true, $obj->getTds110());
    }

    /**
     * Tests setTds111()
     *
     * @return void
     */
    public function testSetTds111(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds111(true);
        $this->assertEquals(true, $obj->getTds111());
    }

    /**
     * Tests setTds112()
     *
     * @return void
     */
    public function testSetTds112(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds112(10.092018);
        $this->assertEquals(10.092018, $obj->getTds112());
    }

    /**
     * Tests setTds113()
     *
     * @return void
     */
    public function testSetTds113(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds113(true);
        $this->assertEquals(true, $obj->getTds113());
    }

    /**
     * Tests setTds117()
     *
     * @return void
     */
    public function testSetTds117(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds117(10.092018);
        $this->assertEquals(10.092018, $obj->getTds117());
    }

    /**
     * Tests setTds119()
     *
     * @return void
     */
    public function testSetTds119(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds119(true);
        $this->assertEquals(true, $obj->getTds119());
    }

    /**
     * Tests setTds120()
     *
     * @return void
     */
    public function testSetTds120(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds120(true);
        $this->assertEquals(true, $obj->getTds120());
    }

    /**
     * Tests setTds121()
     *
     * @return void
     */
    public function testSetTds121(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds121(true);
        $this->assertEquals(true, $obj->getTds121());
    }

    /**
     * Tests setTds122()
     *
     * @return void
     */
    public function testSetTds122(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds122(true);
        $this->assertEquals(true, $obj->getTds122());
    }

    /**
     * Tests setTds125()
     *
     * @return void
     */
    public function testSetTds125(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds125(10.092018);
        $this->assertEquals(10.092018, $obj->getTds125());
    }

    /**
     * Tests setTds132()
     *
     * @return void
     */
    public function testSetTds132(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds132(10.092018);
        $this->assertEquals(10.092018, $obj->getTds132());
    }

    /**
     * Tests setTds134()
     *
     * @return void
     */
    public function testSetTds134(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds134(10.092018);
        $this->assertEquals(10.092018, $obj->getTds134());
    }

    /**
     * Tests setTds135()
     *
     * @return void
     */
    public function testSetTds135(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds135(10.092018);
        $this->assertEquals(10.092018, $obj->getTds135());
    }

    /**
     * Tests setTds136()
     *
     * @return void
     */
    public function testSetTds136(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds136(10.092018);
        $this->assertEquals(10.092018, $obj->getTds136());
    }

    /**
     * Tests setTds137()
     *
     * @return void
     */
    public function testSetTds137(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds137(10.092018);
        $this->assertEquals(10.092018, $obj->getTds137());
    }

    /**
     * Tests setTds141()
     *
     * @return void
     */
    public function testSetTds141(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds141(10.092018);
        $this->assertEquals(10.092018, $obj->getTds141());
    }

    /**
     * Tests setTds142()
     *
     * @return void
     */
    public function testSetTds142(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds142(10.092018);
        $this->assertEquals(10.092018, $obj->getTds142());
    }

    /**
     * Tests setTds81()
     *
     * @return void
     */
    public function testSetTds81(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds81(10.092018);
        $this->assertEquals(10.092018, $obj->getTds81());
    }

    /**
     * Tests setTds82()
     *
     * @return void
     */
    public function testSetTds82(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds82(10.092018);
        $this->assertEquals(10.092018, $obj->getTds82());
    }

    /**
     * Tests setTdsAllocRetraite()
     *
     * @return void
     */
    public function testSetTdsAllocRetraite(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTdsAllocRetraite(10.092018);
        $this->assertEquals(10.092018, $obj->getTdsAllocRetraite());
    }

    /**
     * Tests setTotalPlaf()
     *
     * @return void
     */
    public function testSetTotalPlaf(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTotalPlaf(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalPlaf());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new EmpDadsuRectif();

        $this->assertNull($obj->getActif());
        $this->assertNull($obj->getActionsGratuitesNbre());
        $this->assertNull($obj->getActionsGratuitesValeurU());
        $this->assertNull($obj->getAutresSommesExoMnt1());
        $this->assertNull($obj->getAutresSommesExoMnt2());
        $this->assertNull($obj->getAutresSommesExoMnt3());
        $this->assertNull($obj->getAutresSommesExoMnt4());
        $this->assertNull($obj->getBaseExoBrut1());
        $this->assertNull($obj->getBaseExoBrut2());
        $this->assertNull($obj->getBaseExoBrut3());
        $this->assertNull($obj->getBaseExoPlaf1());
        $this->assertNull($obj->getBaseExoPlaf2());
        $this->assertNull($obj->getBaseExoPlaf3());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCsgSpecif());
        $this->assertNull($obj->getEpargneSalMnt1());
        $this->assertNull($obj->getEpargneSalMnt2());
        $this->assertNull($obj->getEpargneSalMnt3());
        $this->assertNull($obj->getEpargneSalMnt4());
        $this->assertNull($obj->getGpecMntExoCsgcrds());
        $this->assertNull($obj->getGpecMntExoCotSecu());
        $this->assertNull($obj->getIndCp());
        $this->assertNull($obj->getIndemnCpPlaf());
        $this->assertNull($obj->getIndemnImpat());
        $this->assertNull($obj->getIndemnRuptureMnt1());
        $this->assertNull($obj->getIndemnRuptureMnt2());
        $this->assertNull($obj->getIndiceRectif());
        $this->assertNull($obj->getMontantBPlaf());
        $this->assertNull($obj->getMontantBPlaf2());
        $this->assertNull($obj->getMontantBPlaf3());
        $this->assertNull($obj->getMontantBPlaf4());
        $this->assertNull($obj->getMontantBPlaf5());
        $this->assertNull($obj->getMontantBrut());
        $this->assertNull($obj->getMontantBrut2());
        $this->assertNull($obj->getMontantBrut3());
        $this->assertNull($obj->getMontantBrut4());
        $this->assertNull($obj->getMontantBrut5());
        $this->assertNull($obj->getMontantSommeIsolBrut());
        $this->assertNull($obj->getMontantSommeIsolBrut2());
        $this->assertNull($obj->getMontantSommeIsolBrut3());
        $this->assertNull($obj->getMontantSommeIsolBrut4());
        $this->assertNull($obj->getMontantSommeIsolBrut5());
        $this->assertNull($obj->getMontantSommeIsolPlaf());
        $this->assertNull($obj->getMontantSommeIsolPlaf2());
        $this->assertNull($obj->getMontantSommeIsolPlaf3());
        $this->assertNull($obj->getMontantSommeIsolPlaf4());
        $this->assertNull($obj->getMontantSommeIsolPlaf5());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getNumeroOrdre());
        $this->assertNull($obj->getParticipPatronAvtgeMnt1());
        $this->assertNull($obj->getParticipPatronAvtgeMnt2());
        $this->assertNull($obj->getParticipServPers());
        $this->assertNull($obj->getTds100());
        $this->assertNull($obj->getTds103());
        $this->assertNull($obj->getTds105());
        $this->assertNull($obj->getTds107());
        $this->assertNull($obj->getTds108());
        $this->assertNull($obj->getTds109());
        $this->assertNull($obj->getTds110());
        $this->assertNull($obj->getTds111());
        $this->assertNull($obj->getTds112());
        $this->assertNull($obj->getTds113());
        $this->assertNull($obj->getTds117());
        $this->assertNull($obj->getTds119());
        $this->assertNull($obj->getTds120());
        $this->assertNull($obj->getTds121());
        $this->assertNull($obj->getTds122());
        $this->assertNull($obj->getTds125());
        $this->assertNull($obj->getTds132());
        $this->assertNull($obj->getTds134());
        $this->assertNull($obj->getTds135());
        $this->assertNull($obj->getTds136());
        $this->assertNull($obj->getTds141());
        $this->assertNull($obj->getTds81());
        $this->assertNull($obj->getTds82());
        $this->assertNull($obj->getTaxeSalaire());
        $this->assertNull($obj->getTds137());
        $this->assertNull($obj->getTds142());
        $this->assertNull($obj->getTdsAllocRetraite());
        $this->assertNull($obj->getTotalPlaf());
    }
}
