<?php

declare(strict_types = 1);

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
     * Test setActif()
     *
     * @return void
     */
    public function testSetActif(): void {

        $obj = new EmpDadsuRectif();

        $obj->setActif(true);
        $this->assertTrue($obj->getActif());
    }

    /**
     * Test setActionsGratuitesNbre()
     *
     * @return void
     */
    public function testSetActionsGratuitesNbre(): void {

        $obj = new EmpDadsuRectif();

        $obj->setActionsGratuitesNbre(10.092018);
        $this->assertEquals(10.092018, $obj->getActionsGratuitesNbre());
    }

    /**
     * Test setActionsGratuitesValeurU()
     *
     * @return void
     */
    public function testSetActionsGratuitesValeurU(): void {

        $obj = new EmpDadsuRectif();

        $obj->setActionsGratuitesValeurU(10.092018);
        $this->assertEquals(10.092018, $obj->getActionsGratuitesValeurU());
    }

    /**
     * Test setAutresSommesExoMnt1()
     *
     * @return void
     */
    public function testSetAutresSommesExoMnt1(): void {

        $obj = new EmpDadsuRectif();

        $obj->setAutresSommesExoMnt1(10.092018);
        $this->assertEquals(10.092018, $obj->getAutresSommesExoMnt1());
    }

    /**
     * Test setAutresSommesExoMnt2()
     *
     * @return void
     */
    public function testSetAutresSommesExoMnt2(): void {

        $obj = new EmpDadsuRectif();

        $obj->setAutresSommesExoMnt2(10.092018);
        $this->assertEquals(10.092018, $obj->getAutresSommesExoMnt2());
    }

    /**
     * Test setAutresSommesExoMnt3()
     *
     * @return void
     */
    public function testSetAutresSommesExoMnt3(): void {

        $obj = new EmpDadsuRectif();

        $obj->setAutresSommesExoMnt3(10.092018);
        $this->assertEquals(10.092018, $obj->getAutresSommesExoMnt3());
    }

    /**
     * Test setAutresSommesExoMnt4()
     *
     * @return void
     */
    public function testSetAutresSommesExoMnt4(): void {

        $obj = new EmpDadsuRectif();

        $obj->setAutresSommesExoMnt4(10.092018);
        $this->assertEquals(10.092018, $obj->getAutresSommesExoMnt4());
    }

    /**
     * Test setBaseExoBrut1()
     *
     * @return void
     */
    public function testSetBaseExoBrut1(): void {

        $obj = new EmpDadsuRectif();

        $obj->setBaseExoBrut1(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseExoBrut1());
    }

    /**
     * Test setBaseExoBrut2()
     *
     * @return void
     */
    public function testSetBaseExoBrut2(): void {

        $obj = new EmpDadsuRectif();

        $obj->setBaseExoBrut2(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseExoBrut2());
    }

    /**
     * Test setBaseExoBrut3()
     *
     * @return void
     */
    public function testSetBaseExoBrut3(): void {

        $obj = new EmpDadsuRectif();

        $obj->setBaseExoBrut3(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseExoBrut3());
    }

    /**
     * Test setBaseExoPlaf1()
     *
     * @return void
     */
    public function testSetBaseExoPlaf1(): void {

        $obj = new EmpDadsuRectif();

        $obj->setBaseExoPlaf1(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseExoPlaf1());
    }

    /**
     * Test setBaseExoPlaf2()
     *
     * @return void
     */
    public function testSetBaseExoPlaf2(): void {

        $obj = new EmpDadsuRectif();

        $obj->setBaseExoPlaf2(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseExoPlaf2());
    }

    /**
     * Test setBaseExoPlaf3()
     *
     * @return void
     */
    public function testSetBaseExoPlaf3(): void {

        $obj = new EmpDadsuRectif();

        $obj->setBaseExoPlaf3(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseExoPlaf3());
    }

    /**
     * Test setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new EmpDadsuRectif();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Test setCsgSpecif()
     *
     * @return void
     */
    public function testSetCsgSpecif(): void {

        $obj = new EmpDadsuRectif();

        $obj->setCsgSpecif(10.092018);
        $this->assertEquals(10.092018, $obj->getCsgSpecif());
    }

    /**
     * Test setEpargneSalMnt1()
     *
     * @return void
     */
    public function testSetEpargneSalMnt1(): void {

        $obj = new EmpDadsuRectif();

        $obj->setEpargneSalMnt1(10.092018);
        $this->assertEquals(10.092018, $obj->getEpargneSalMnt1());
    }

    /**
     * Test setEpargneSalMnt2()
     *
     * @return void
     */
    public function testSetEpargneSalMnt2(): void {

        $obj = new EmpDadsuRectif();

        $obj->setEpargneSalMnt2(10.092018);
        $this->assertEquals(10.092018, $obj->getEpargneSalMnt2());
    }

    /**
     * Test setEpargneSalMnt3()
     *
     * @return void
     */
    public function testSetEpargneSalMnt3(): void {

        $obj = new EmpDadsuRectif();

        $obj->setEpargneSalMnt3(10.092018);
        $this->assertEquals(10.092018, $obj->getEpargneSalMnt3());
    }

    /**
     * Test setEpargneSalMnt4()
     *
     * @return void
     */
    public function testSetEpargneSalMnt4(): void {

        $obj = new EmpDadsuRectif();

        $obj->setEpargneSalMnt4(10.092018);
        $this->assertEquals(10.092018, $obj->getEpargneSalMnt4());
    }

    /**
     * Test setGpecMntExoCotSecu()
     *
     * @return void
     */
    public function testSetGpecMntExoCotSecu(): void {

        $obj = new EmpDadsuRectif();

        $obj->setGpecMntExoCotSecu(10.092018);
        $this->assertEquals(10.092018, $obj->getGpecMntExoCotSecu());
    }

    /**
     * Test setGpecMntExoCsgcrds()
     *
     * @return void
     */
    public function testSetGpecMntExoCsgcrds(): void {

        $obj = new EmpDadsuRectif();

        $obj->setGpecMntExoCsgcrds(10.092018);
        $this->assertEquals(10.092018, $obj->getGpecMntExoCsgcrds());
    }

    /**
     * Test setIndCp()
     *
     * @return void
     */
    public function testSetIndCp(): void {

        $obj = new EmpDadsuRectif();

        $obj->setIndCp(10.092018);
        $this->assertEquals(10.092018, $obj->getIndCp());
    }

    /**
     * Test setIndemnCpPlaf()
     *
     * @return void
     */
    public function testSetIndemnCpPlaf(): void {

        $obj = new EmpDadsuRectif();

        $obj->setIndemnCpPlaf(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnCpPlaf());
    }

    /**
     * Test setIndemnImpat()
     *
     * @return void
     */
    public function testSetIndemnImpat(): void {

        $obj = new EmpDadsuRectif();

        $obj->setIndemnImpat(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnImpat());
    }

    /**
     * Test setIndemnRuptureMnt1()
     *
     * @return void
     */
    public function testSetIndemnRuptureMnt1(): void {

        $obj = new EmpDadsuRectif();

        $obj->setIndemnRuptureMnt1(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnRuptureMnt1());
    }

    /**
     * Test setIndemnRuptureMnt2()
     *
     * @return void
     */
    public function testSetIndemnRuptureMnt2(): void {

        $obj = new EmpDadsuRectif();

        $obj->setIndemnRuptureMnt2(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnRuptureMnt2());
    }

    /**
     * Test setIndiceRectif()
     *
     * @return void
     */
    public function testSetIndiceRectif(): void {

        $obj = new EmpDadsuRectif();

        $obj->setIndiceRectif(10);
        $this->assertEquals(10, $obj->getIndiceRectif());
    }

    /**
     * Test setMontantBPlaf()
     *
     * @return void
     */
    public function testSetMontantBPlaf(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantBPlaf(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBPlaf());
    }

    /**
     * Test setMontantBPlaf2()
     *
     * @return void
     */
    public function testSetMontantBPlaf2(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantBPlaf2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBPlaf2());
    }

    /**
     * Test setMontantBPlaf3()
     *
     * @return void
     */
    public function testSetMontantBPlaf3(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantBPlaf3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBPlaf3());
    }

    /**
     * Test setMontantBPlaf4()
     *
     * @return void
     */
    public function testSetMontantBPlaf4(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantBPlaf4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBPlaf4());
    }

    /**
     * Test setMontantBPlaf5()
     *
     * @return void
     */
    public function testSetMontantBPlaf5(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantBPlaf5(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBPlaf5());
    }

    /**
     * Test setMontantBrut()
     *
     * @return void
     */
    public function testSetMontantBrut(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBrut());
    }

    /**
     * Test setMontantBrut2()
     *
     * @return void
     */
    public function testSetMontantBrut2(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantBrut2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBrut2());
    }

    /**
     * Test setMontantBrut3()
     *
     * @return void
     */
    public function testSetMontantBrut3(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantBrut3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBrut3());
    }

    /**
     * Test setMontantBrut4()
     *
     * @return void
     */
    public function testSetMontantBrut4(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantBrut4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBrut4());
    }

    /**
     * Test setMontantBrut5()
     *
     * @return void
     */
    public function testSetMontantBrut5(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantBrut5(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBrut5());
    }

    /**
     * Test setMontantSommeIsolBrut()
     *
     * @return void
     */
    public function testSetMontantSommeIsolBrut(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantSommeIsolBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolBrut());
    }

    /**
     * Test setMontantSommeIsolBrut2()
     *
     * @return void
     */
    public function testSetMontantSommeIsolBrut2(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantSommeIsolBrut2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolBrut2());
    }

    /**
     * Test setMontantSommeIsolBrut3()
     *
     * @return void
     */
    public function testSetMontantSommeIsolBrut3(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantSommeIsolBrut3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolBrut3());
    }

    /**
     * Test setMontantSommeIsolBrut4()
     *
     * @return void
     */
    public function testSetMontantSommeIsolBrut4(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantSommeIsolBrut4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolBrut4());
    }

    /**
     * Test setMontantSommeIsolBrut5()
     *
     * @return void
     */
    public function testSetMontantSommeIsolBrut5(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantSommeIsolBrut5(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolBrut5());
    }

    /**
     * Test setMontantSommeIsolPlaf()
     *
     * @return void
     */
    public function testSetMontantSommeIsolPlaf(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantSommeIsolPlaf(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf());
    }

    /**
     * Test setMontantSommeIsolPlaf2()
     *
     * @return void
     */
    public function testSetMontantSommeIsolPlaf2(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantSommeIsolPlaf2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf2());
    }

    /**
     * Test setMontantSommeIsolPlaf3()
     *
     * @return void
     */
    public function testSetMontantSommeIsolPlaf3(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantSommeIsolPlaf3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf3());
    }

    /**
     * Test setMontantSommeIsolPlaf4()
     *
     * @return void
     */
    public function testSetMontantSommeIsolPlaf4(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantSommeIsolPlaf4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf4());
    }

    /**
     * Test setMontantSommeIsolPlaf5()
     *
     * @return void
     */
    public function testSetMontantSommeIsolPlaf5(): void {

        $obj = new EmpDadsuRectif();

        $obj->setMontantSommeIsolPlaf5(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf5());
    }

    /**
     * Test setNumero()
     *
     * @return void
     */
    public function testSetNumero(): void {

        $obj = new EmpDadsuRectif();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }

    /**
     * Test setNumeroOrdre()
     *
     * @return void
     */
    public function testSetNumeroOrdre(): void {

        $obj = new EmpDadsuRectif();

        $obj->setNumeroOrdre(10);
        $this->assertEquals(10, $obj->getNumeroOrdre());
    }

    /**
     * Test setParticipPatronAvtgeMnt1()
     *
     * @return void
     */
    public function testSetParticipPatronAvtgeMnt1(): void {

        $obj = new EmpDadsuRectif();

        $obj->setParticipPatronAvtgeMnt1(10.092018);
        $this->assertEquals(10.092018, $obj->getParticipPatronAvtgeMnt1());
    }

    /**
     * Test setParticipPatronAvtgeMnt2()
     *
     * @return void
     */
    public function testSetParticipPatronAvtgeMnt2(): void {

        $obj = new EmpDadsuRectif();

        $obj->setParticipPatronAvtgeMnt2(10.092018);
        $this->assertEquals(10.092018, $obj->getParticipPatronAvtgeMnt2());
    }

    /**
     * Test setParticipServPers()
     *
     * @return void
     */
    public function testSetParticipServPers(): void {

        $obj = new EmpDadsuRectif();

        $obj->setParticipServPers(10.092018);
        $this->assertEquals(10.092018, $obj->getParticipServPers());
    }

    /**
     * Test setTaxeSalaire()
     *
     * @return void
     */
    public function testSetTaxeSalaire(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTaxeSalaire(10.092018);
        $this->assertEquals(10.092018, $obj->getTaxeSalaire());
    }

    /**
     * Test setTds100()
     *
     * @return void
     */
    public function testSetTds100(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds100(10.092018);
        $this->assertEquals(10.092018, $obj->getTds100());
    }

    /**
     * Test setTds103()
     *
     * @return void
     */
    public function testSetTds103(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds103(10.092018);
        $this->assertEquals(10.092018, $obj->getTds103());
    }

    /**
     * Test setTds105()
     *
     * @return void
     */
    public function testSetTds105(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds105(10.092018);
        $this->assertEquals(10.092018, $obj->getTds105());
    }

    /**
     * Test setTds107()
     *
     * @return void
     */
    public function testSetTds107(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds107(true);
        $this->assertTrue($obj->getTds107());
    }

    /**
     * Test setTds108()
     *
     * @return void
     */
    public function testSetTds108(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds108(true);
        $this->assertTrue($obj->getTds108());
    }

    /**
     * Test setTds109()
     *
     * @return void
     */
    public function testSetTds109(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds109(true);
        $this->assertTrue($obj->getTds109());
    }

    /**
     * Test setTds110()
     *
     * @return void
     */
    public function testSetTds110(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds110(true);
        $this->assertTrue($obj->getTds110());
    }

    /**
     * Test setTds111()
     *
     * @return void
     */
    public function testSetTds111(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds111(true);
        $this->assertTrue($obj->getTds111());
    }

    /**
     * Test setTds112()
     *
     * @return void
     */
    public function testSetTds112(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds112(10.092018);
        $this->assertEquals(10.092018, $obj->getTds112());
    }

    /**
     * Test setTds113()
     *
     * @return void
     */
    public function testSetTds113(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds113(true);
        $this->assertTrue($obj->getTds113());
    }

    /**
     * Test setTds117()
     *
     * @return void
     */
    public function testSetTds117(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds117(10.092018);
        $this->assertEquals(10.092018, $obj->getTds117());
    }

    /**
     * Test setTds119()
     *
     * @return void
     */
    public function testSetTds119(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds119(true);
        $this->assertTrue($obj->getTds119());
    }

    /**
     * Test setTds120()
     *
     * @return void
     */
    public function testSetTds120(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds120(true);
        $this->assertTrue($obj->getTds120());
    }

    /**
     * Test setTds121()
     *
     * @return void
     */
    public function testSetTds121(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds121(true);
        $this->assertTrue($obj->getTds121());
    }

    /**
     * Test setTds122()
     *
     * @return void
     */
    public function testSetTds122(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds122(true);
        $this->assertTrue($obj->getTds122());
    }

    /**
     * Test setTds125()
     *
     * @return void
     */
    public function testSetTds125(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds125(10.092018);
        $this->assertEquals(10.092018, $obj->getTds125());
    }

    /**
     * Test setTds132()
     *
     * @return void
     */
    public function testSetTds132(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds132(10.092018);
        $this->assertEquals(10.092018, $obj->getTds132());
    }

    /**
     * Test setTds134()
     *
     * @return void
     */
    public function testSetTds134(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds134(10.092018);
        $this->assertEquals(10.092018, $obj->getTds134());
    }

    /**
     * Test setTds135()
     *
     * @return void
     */
    public function testSetTds135(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds135(10.092018);
        $this->assertEquals(10.092018, $obj->getTds135());
    }

    /**
     * Test setTds136()
     *
     * @return void
     */
    public function testSetTds136(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds136(10.092018);
        $this->assertEquals(10.092018, $obj->getTds136());
    }

    /**
     * Test setTds137()
     *
     * @return void
     */
    public function testSetTds137(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds137(10.092018);
        $this->assertEquals(10.092018, $obj->getTds137());
    }

    /**
     * Test setTds141()
     *
     * @return void
     */
    public function testSetTds141(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds141(10.092018);
        $this->assertEquals(10.092018, $obj->getTds141());
    }

    /**
     * Test setTds142()
     *
     * @return void
     */
    public function testSetTds142(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds142(10.092018);
        $this->assertEquals(10.092018, $obj->getTds142());
    }

    /**
     * Test setTds81()
     *
     * @return void
     */
    public function testSetTds81(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds81(10.092018);
        $this->assertEquals(10.092018, $obj->getTds81());
    }

    /**
     * Test setTds82()
     *
     * @return void
     */
    public function testSetTds82(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTds82(10.092018);
        $this->assertEquals(10.092018, $obj->getTds82());
    }

    /**
     * Test setTdsAllocRetraite()
     *
     * @return void
     */
    public function testSetTdsAllocRetraite(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTdsAllocRetraite(10.092018);
        $this->assertEquals(10.092018, $obj->getTdsAllocRetraite());
    }

    /**
     * Test setTotalPlaf()
     *
     * @return void
     */
    public function testSetTotalPlaf(): void {

        $obj = new EmpDadsuRectif();

        $obj->setTotalPlaf(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalPlaf());
    }

    /**
     * Test __construct()
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
