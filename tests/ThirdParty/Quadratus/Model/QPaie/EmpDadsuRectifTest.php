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

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\EmpDadsuRectif;

/**
 * Emp dadsu rectif test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class EmpDadsuRectifTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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

    /**
     * Tests the setActif() method.
     *
     * @return void
     */
    public function testSetActif() {

        $obj = new EmpDadsuRectif();

        $obj->setActif(true);
        $this->assertEquals(true, $obj->getActif());
    }

    /**
     * Tests the setActionsGratuitesNbre() method.
     *
     * @return void
     */
    public function testSetActionsGratuitesNbre() {

        $obj = new EmpDadsuRectif();

        $obj->setActionsGratuitesNbre(10.092018);
        $this->assertEquals(10.092018, $obj->getActionsGratuitesNbre());
    }

    /**
     * Tests the setActionsGratuitesValeurU() method.
     *
     * @return void
     */
    public function testSetActionsGratuitesValeurU() {

        $obj = new EmpDadsuRectif();

        $obj->setActionsGratuitesValeurU(10.092018);
        $this->assertEquals(10.092018, $obj->getActionsGratuitesValeurU());
    }

    /**
     * Tests the setAutresSommesExoMnt1() method.
     *
     * @return void
     */
    public function testSetAutresSommesExoMnt1() {

        $obj = new EmpDadsuRectif();

        $obj->setAutresSommesExoMnt1(10.092018);
        $this->assertEquals(10.092018, $obj->getAutresSommesExoMnt1());
    }

    /**
     * Tests the setAutresSommesExoMnt2() method.
     *
     * @return void
     */
    public function testSetAutresSommesExoMnt2() {

        $obj = new EmpDadsuRectif();

        $obj->setAutresSommesExoMnt2(10.092018);
        $this->assertEquals(10.092018, $obj->getAutresSommesExoMnt2());
    }

    /**
     * Tests the setAutresSommesExoMnt3() method.
     *
     * @return void
     */
    public function testSetAutresSommesExoMnt3() {

        $obj = new EmpDadsuRectif();

        $obj->setAutresSommesExoMnt3(10.092018);
        $this->assertEquals(10.092018, $obj->getAutresSommesExoMnt3());
    }

    /**
     * Tests the setAutresSommesExoMnt4() method.
     *
     * @return void
     */
    public function testSetAutresSommesExoMnt4() {

        $obj = new EmpDadsuRectif();

        $obj->setAutresSommesExoMnt4(10.092018);
        $this->assertEquals(10.092018, $obj->getAutresSommesExoMnt4());
    }

    /**
     * Tests the setBaseExoBrut1() method.
     *
     * @return void
     */
    public function testSetBaseExoBrut1() {

        $obj = new EmpDadsuRectif();

        $obj->setBaseExoBrut1(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseExoBrut1());
    }

    /**
     * Tests the setBaseExoBrut2() method.
     *
     * @return void
     */
    public function testSetBaseExoBrut2() {

        $obj = new EmpDadsuRectif();

        $obj->setBaseExoBrut2(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseExoBrut2());
    }

    /**
     * Tests the setBaseExoBrut3() method.
     *
     * @return void
     */
    public function testSetBaseExoBrut3() {

        $obj = new EmpDadsuRectif();

        $obj->setBaseExoBrut3(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseExoBrut3());
    }

    /**
     * Tests the setBaseExoPlaf1() method.
     *
     * @return void
     */
    public function testSetBaseExoPlaf1() {

        $obj = new EmpDadsuRectif();

        $obj->setBaseExoPlaf1(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseExoPlaf1());
    }

    /**
     * Tests the setBaseExoPlaf2() method.
     *
     * @return void
     */
    public function testSetBaseExoPlaf2() {

        $obj = new EmpDadsuRectif();

        $obj->setBaseExoPlaf2(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseExoPlaf2());
    }

    /**
     * Tests the setBaseExoPlaf3() method.
     *
     * @return void
     */
    public function testSetBaseExoPlaf3() {

        $obj = new EmpDadsuRectif();

        $obj->setBaseExoPlaf3(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseExoPlaf3());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new EmpDadsuRectif();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCsgSpecif() method.
     *
     * @return void
     */
    public function testSetCsgSpecif() {

        $obj = new EmpDadsuRectif();

        $obj->setCsgSpecif(10.092018);
        $this->assertEquals(10.092018, $obj->getCsgSpecif());
    }

    /**
     * Tests the setEpargneSalMnt1() method.
     *
     * @return void
     */
    public function testSetEpargneSalMnt1() {

        $obj = new EmpDadsuRectif();

        $obj->setEpargneSalMnt1(10.092018);
        $this->assertEquals(10.092018, $obj->getEpargneSalMnt1());
    }

    /**
     * Tests the setEpargneSalMnt2() method.
     *
     * @return void
     */
    public function testSetEpargneSalMnt2() {

        $obj = new EmpDadsuRectif();

        $obj->setEpargneSalMnt2(10.092018);
        $this->assertEquals(10.092018, $obj->getEpargneSalMnt2());
    }

    /**
     * Tests the setEpargneSalMnt3() method.
     *
     * @return void
     */
    public function testSetEpargneSalMnt3() {

        $obj = new EmpDadsuRectif();

        $obj->setEpargneSalMnt3(10.092018);
        $this->assertEquals(10.092018, $obj->getEpargneSalMnt3());
    }

    /**
     * Tests the setEpargneSalMnt4() method.
     *
     * @return void
     */
    public function testSetEpargneSalMnt4() {

        $obj = new EmpDadsuRectif();

        $obj->setEpargneSalMnt4(10.092018);
        $this->assertEquals(10.092018, $obj->getEpargneSalMnt4());
    }

    /**
     * Tests the setGpecMntExoCotSecu() method.
     *
     * @return void
     */
    public function testSetGpecMntExoCotSecu() {

        $obj = new EmpDadsuRectif();

        $obj->setGpecMntExoCotSecu(10.092018);
        $this->assertEquals(10.092018, $obj->getGpecMntExoCotSecu());
    }

    /**
     * Tests the setGpecMntExoCsgcrds() method.
     *
     * @return void
     */
    public function testSetGpecMntExoCsgcrds() {

        $obj = new EmpDadsuRectif();

        $obj->setGpecMntExoCsgcrds(10.092018);
        $this->assertEquals(10.092018, $obj->getGpecMntExoCsgcrds());
    }

    /**
     * Tests the setIndCp() method.
     *
     * @return void
     */
    public function testSetIndCp() {

        $obj = new EmpDadsuRectif();

        $obj->setIndCp(10.092018);
        $this->assertEquals(10.092018, $obj->getIndCp());
    }

    /**
     * Tests the setIndemnCpPlaf() method.
     *
     * @return void
     */
    public function testSetIndemnCpPlaf() {

        $obj = new EmpDadsuRectif();

        $obj->setIndemnCpPlaf(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnCpPlaf());
    }

    /**
     * Tests the setIndemnImpat() method.
     *
     * @return void
     */
    public function testSetIndemnImpat() {

        $obj = new EmpDadsuRectif();

        $obj->setIndemnImpat(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnImpat());
    }

    /**
     * Tests the setIndemnRuptureMnt1() method.
     *
     * @return void
     */
    public function testSetIndemnRuptureMnt1() {

        $obj = new EmpDadsuRectif();

        $obj->setIndemnRuptureMnt1(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnRuptureMnt1());
    }

    /**
     * Tests the setIndemnRuptureMnt2() method.
     *
     * @return void
     */
    public function testSetIndemnRuptureMnt2() {

        $obj = new EmpDadsuRectif();

        $obj->setIndemnRuptureMnt2(10.092018);
        $this->assertEquals(10.092018, $obj->getIndemnRuptureMnt2());
    }

    /**
     * Tests the setIndiceRectif() method.
     *
     * @return void
     */
    public function testSetIndiceRectif() {

        $obj = new EmpDadsuRectif();

        $obj->setIndiceRectif(10);
        $this->assertEquals(10, $obj->getIndiceRectif());
    }

    /**
     * Tests the setMontantBPlaf() method.
     *
     * @return void
     */
    public function testSetMontantBPlaf() {

        $obj = new EmpDadsuRectif();

        $obj->setMontantBPlaf(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBPlaf());
    }

    /**
     * Tests the setMontantBPlaf2() method.
     *
     * @return void
     */
    public function testSetMontantBPlaf2() {

        $obj = new EmpDadsuRectif();

        $obj->setMontantBPlaf2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBPlaf2());
    }

    /**
     * Tests the setMontantBPlaf3() method.
     *
     * @return void
     */
    public function testSetMontantBPlaf3() {

        $obj = new EmpDadsuRectif();

        $obj->setMontantBPlaf3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBPlaf3());
    }

    /**
     * Tests the setMontantBPlaf4() method.
     *
     * @return void
     */
    public function testSetMontantBPlaf4() {

        $obj = new EmpDadsuRectif();

        $obj->setMontantBPlaf4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBPlaf4());
    }

    /**
     * Tests the setMontantBPlaf5() method.
     *
     * @return void
     */
    public function testSetMontantBPlaf5() {

        $obj = new EmpDadsuRectif();

        $obj->setMontantBPlaf5(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBPlaf5());
    }

    /**
     * Tests the setMontantBrut() method.
     *
     * @return void
     */
    public function testSetMontantBrut() {

        $obj = new EmpDadsuRectif();

        $obj->setMontantBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBrut());
    }

    /**
     * Tests the setMontantBrut2() method.
     *
     * @return void
     */
    public function testSetMontantBrut2() {

        $obj = new EmpDadsuRectif();

        $obj->setMontantBrut2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBrut2());
    }

    /**
     * Tests the setMontantBrut3() method.
     *
     * @return void
     */
    public function testSetMontantBrut3() {

        $obj = new EmpDadsuRectif();

        $obj->setMontantBrut3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBrut3());
    }

    /**
     * Tests the setMontantBrut4() method.
     *
     * @return void
     */
    public function testSetMontantBrut4() {

        $obj = new EmpDadsuRectif();

        $obj->setMontantBrut4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBrut4());
    }

    /**
     * Tests the setMontantBrut5() method.
     *
     * @return void
     */
    public function testSetMontantBrut5() {

        $obj = new EmpDadsuRectif();

        $obj->setMontantBrut5(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBrut5());
    }

    /**
     * Tests the setMontantSommeIsolBrut() method.
     *
     * @return void
     */
    public function testSetMontantSommeIsolBrut() {

        $obj = new EmpDadsuRectif();

        $obj->setMontantSommeIsolBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolBrut());
    }

    /**
     * Tests the setMontantSommeIsolBrut2() method.
     *
     * @return void
     */
    public function testSetMontantSommeIsolBrut2() {

        $obj = new EmpDadsuRectif();

        $obj->setMontantSommeIsolBrut2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolBrut2());
    }

    /**
     * Tests the setMontantSommeIsolBrut3() method.
     *
     * @return void
     */
    public function testSetMontantSommeIsolBrut3() {

        $obj = new EmpDadsuRectif();

        $obj->setMontantSommeIsolBrut3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolBrut3());
    }

    /**
     * Tests the setMontantSommeIsolBrut4() method.
     *
     * @return void
     */
    public function testSetMontantSommeIsolBrut4() {

        $obj = new EmpDadsuRectif();

        $obj->setMontantSommeIsolBrut4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolBrut4());
    }

    /**
     * Tests the setMontantSommeIsolBrut5() method.
     *
     * @return void
     */
    public function testSetMontantSommeIsolBrut5() {

        $obj = new EmpDadsuRectif();

        $obj->setMontantSommeIsolBrut5(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolBrut5());
    }

    /**
     * Tests the setMontantSommeIsolPlaf() method.
     *
     * @return void
     */
    public function testSetMontantSommeIsolPlaf() {

        $obj = new EmpDadsuRectif();

        $obj->setMontantSommeIsolPlaf(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf());
    }

    /**
     * Tests the setMontantSommeIsolPlaf2() method.
     *
     * @return void
     */
    public function testSetMontantSommeIsolPlaf2() {

        $obj = new EmpDadsuRectif();

        $obj->setMontantSommeIsolPlaf2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf2());
    }

    /**
     * Tests the setMontantSommeIsolPlaf3() method.
     *
     * @return void
     */
    public function testSetMontantSommeIsolPlaf3() {

        $obj = new EmpDadsuRectif();

        $obj->setMontantSommeIsolPlaf3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf3());
    }

    /**
     * Tests the setMontantSommeIsolPlaf4() method.
     *
     * @return void
     */
    public function testSetMontantSommeIsolPlaf4() {

        $obj = new EmpDadsuRectif();

        $obj->setMontantSommeIsolPlaf4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf4());
    }

    /**
     * Tests the setMontantSommeIsolPlaf5() method.
     *
     * @return void
     */
    public function testSetMontantSommeIsolPlaf5() {

        $obj = new EmpDadsuRectif();

        $obj->setMontantSommeIsolPlaf5(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf5());
    }

    /**
     * Tests the setNumero() method.
     *
     * @return void
     */
    public function testSetNumero() {

        $obj = new EmpDadsuRectif();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }

    /**
     * Tests the setNumeroOrdre() method.
     *
     * @return void
     */
    public function testSetNumeroOrdre() {

        $obj = new EmpDadsuRectif();

        $obj->setNumeroOrdre(10);
        $this->assertEquals(10, $obj->getNumeroOrdre());
    }

    /**
     * Tests the setParticipPatronAvtgeMnt1() method.
     *
     * @return void
     */
    public function testSetParticipPatronAvtgeMnt1() {

        $obj = new EmpDadsuRectif();

        $obj->setParticipPatronAvtgeMnt1(10.092018);
        $this->assertEquals(10.092018, $obj->getParticipPatronAvtgeMnt1());
    }

    /**
     * Tests the setParticipPatronAvtgeMnt2() method.
     *
     * @return void
     */
    public function testSetParticipPatronAvtgeMnt2() {

        $obj = new EmpDadsuRectif();

        $obj->setParticipPatronAvtgeMnt2(10.092018);
        $this->assertEquals(10.092018, $obj->getParticipPatronAvtgeMnt2());
    }

    /**
     * Tests the setParticipServPers() method.
     *
     * @return void
     */
    public function testSetParticipServPers() {

        $obj = new EmpDadsuRectif();

        $obj->setParticipServPers(10.092018);
        $this->assertEquals(10.092018, $obj->getParticipServPers());
    }

    /**
     * Tests the setTaxeSalaire() method.
     *
     * @return void
     */
    public function testSetTaxeSalaire() {

        $obj = new EmpDadsuRectif();

        $obj->setTaxeSalaire(10.092018);
        $this->assertEquals(10.092018, $obj->getTaxeSalaire());
    }

    /**
     * Tests the setTds100() method.
     *
     * @return void
     */
    public function testSetTds100() {

        $obj = new EmpDadsuRectif();

        $obj->setTds100(10.092018);
        $this->assertEquals(10.092018, $obj->getTds100());
    }

    /**
     * Tests the setTds103() method.
     *
     * @return void
     */
    public function testSetTds103() {

        $obj = new EmpDadsuRectif();

        $obj->setTds103(10.092018);
        $this->assertEquals(10.092018, $obj->getTds103());
    }

    /**
     * Tests the setTds105() method.
     *
     * @return void
     */
    public function testSetTds105() {

        $obj = new EmpDadsuRectif();

        $obj->setTds105(10.092018);
        $this->assertEquals(10.092018, $obj->getTds105());
    }

    /**
     * Tests the setTds107() method.
     *
     * @return void
     */
    public function testSetTds107() {

        $obj = new EmpDadsuRectif();

        $obj->setTds107(true);
        $this->assertEquals(true, $obj->getTds107());
    }

    /**
     * Tests the setTds108() method.
     *
     * @return void
     */
    public function testSetTds108() {

        $obj = new EmpDadsuRectif();

        $obj->setTds108(true);
        $this->assertEquals(true, $obj->getTds108());
    }

    /**
     * Tests the setTds109() method.
     *
     * @return void
     */
    public function testSetTds109() {

        $obj = new EmpDadsuRectif();

        $obj->setTds109(true);
        $this->assertEquals(true, $obj->getTds109());
    }

    /**
     * Tests the setTds110() method.
     *
     * @return void
     */
    public function testSetTds110() {

        $obj = new EmpDadsuRectif();

        $obj->setTds110(true);
        $this->assertEquals(true, $obj->getTds110());
    }

    /**
     * Tests the setTds111() method.
     *
     * @return void
     */
    public function testSetTds111() {

        $obj = new EmpDadsuRectif();

        $obj->setTds111(true);
        $this->assertEquals(true, $obj->getTds111());
    }

    /**
     * Tests the setTds112() method.
     *
     * @return void
     */
    public function testSetTds112() {

        $obj = new EmpDadsuRectif();

        $obj->setTds112(10.092018);
        $this->assertEquals(10.092018, $obj->getTds112());
    }

    /**
     * Tests the setTds113() method.
     *
     * @return void
     */
    public function testSetTds113() {

        $obj = new EmpDadsuRectif();

        $obj->setTds113(true);
        $this->assertEquals(true, $obj->getTds113());
    }

    /**
     * Tests the setTds117() method.
     *
     * @return void
     */
    public function testSetTds117() {

        $obj = new EmpDadsuRectif();

        $obj->setTds117(10.092018);
        $this->assertEquals(10.092018, $obj->getTds117());
    }

    /**
     * Tests the setTds119() method.
     *
     * @return void
     */
    public function testSetTds119() {

        $obj = new EmpDadsuRectif();

        $obj->setTds119(true);
        $this->assertEquals(true, $obj->getTds119());
    }

    /**
     * Tests the setTds120() method.
     *
     * @return void
     */
    public function testSetTds120() {

        $obj = new EmpDadsuRectif();

        $obj->setTds120(true);
        $this->assertEquals(true, $obj->getTds120());
    }

    /**
     * Tests the setTds121() method.
     *
     * @return void
     */
    public function testSetTds121() {

        $obj = new EmpDadsuRectif();

        $obj->setTds121(true);
        $this->assertEquals(true, $obj->getTds121());
    }

    /**
     * Tests the setTds122() method.
     *
     * @return void
     */
    public function testSetTds122() {

        $obj = new EmpDadsuRectif();

        $obj->setTds122(true);
        $this->assertEquals(true, $obj->getTds122());
    }

    /**
     * Tests the setTds125() method.
     *
     * @return void
     */
    public function testSetTds125() {

        $obj = new EmpDadsuRectif();

        $obj->setTds125(10.092018);
        $this->assertEquals(10.092018, $obj->getTds125());
    }

    /**
     * Tests the setTds132() method.
     *
     * @return void
     */
    public function testSetTds132() {

        $obj = new EmpDadsuRectif();

        $obj->setTds132(10.092018);
        $this->assertEquals(10.092018, $obj->getTds132());
    }

    /**
     * Tests the setTds134() method.
     *
     * @return void
     */
    public function testSetTds134() {

        $obj = new EmpDadsuRectif();

        $obj->setTds134(10.092018);
        $this->assertEquals(10.092018, $obj->getTds134());
    }

    /**
     * Tests the setTds135() method.
     *
     * @return void
     */
    public function testSetTds135() {

        $obj = new EmpDadsuRectif();

        $obj->setTds135(10.092018);
        $this->assertEquals(10.092018, $obj->getTds135());
    }

    /**
     * Tests the setTds136() method.
     *
     * @return void
     */
    public function testSetTds136() {

        $obj = new EmpDadsuRectif();

        $obj->setTds136(10.092018);
        $this->assertEquals(10.092018, $obj->getTds136());
    }

    /**
     * Tests the setTds137() method.
     *
     * @return void
     */
    public function testSetTds137() {

        $obj = new EmpDadsuRectif();

        $obj->setTds137(10.092018);
        $this->assertEquals(10.092018, $obj->getTds137());
    }

    /**
     * Tests the setTds141() method.
     *
     * @return void
     */
    public function testSetTds141() {

        $obj = new EmpDadsuRectif();

        $obj->setTds141(10.092018);
        $this->assertEquals(10.092018, $obj->getTds141());
    }

    /**
     * Tests the setTds142() method.
     *
     * @return void
     */
    public function testSetTds142() {

        $obj = new EmpDadsuRectif();

        $obj->setTds142(10.092018);
        $this->assertEquals(10.092018, $obj->getTds142());
    }

    /**
     * Tests the setTds81() method.
     *
     * @return void
     */
    public function testSetTds81() {

        $obj = new EmpDadsuRectif();

        $obj->setTds81(10.092018);
        $this->assertEquals(10.092018, $obj->getTds81());
    }

    /**
     * Tests the setTds82() method.
     *
     * @return void
     */
    public function testSetTds82() {

        $obj = new EmpDadsuRectif();

        $obj->setTds82(10.092018);
        $this->assertEquals(10.092018, $obj->getTds82());
    }

    /**
     * Tests the setTdsAllocRetraite() method.
     *
     * @return void
     */
    public function testSetTdsAllocRetraite() {

        $obj = new EmpDadsuRectif();

        $obj->setTdsAllocRetraite(10.092018);
        $this->assertEquals(10.092018, $obj->getTdsAllocRetraite());
    }

    /**
     * Tests the setTotalPlaf() method.
     *
     * @return void
     */
    public function testSetTotalPlaf() {

        $obj = new EmpDadsuRectif();

        $obj->setTotalPlaf(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalPlaf());
    }
}
