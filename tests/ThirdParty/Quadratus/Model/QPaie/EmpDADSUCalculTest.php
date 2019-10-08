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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\EmpDADSUCalcul;

/**
 * Emp d a d s u calcul model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class EmpDADSUCalculTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new EmpDADSUCalcul();

        $this->assertNull($obj->getAnciennBtp());
        $this->assertNull($obj->getAnneeSommeIsol());
        $this->assertNull($obj->getAnneeSommeIsol2());
        $this->assertNull($obj->getAnneeSommeIsol3());
        $this->assertNull($obj->getAnneeSommeIsol4());
        $this->assertNull($obj->getAnneeSommeIsol5());
        $this->assertNull($obj->getBTPSalMoyen());
        $this->assertNull($obj->getBaseBruteCPBTP());
        $this->assertNull($obj->getBaseBruteCotCCPBTP());
        $this->assertNull($obj->getBaseBruteCotOPPBTP());
        $this->assertNull($obj->getBenefAssedic());
        $this->assertNull($obj->getBrutIrcantec());
        $this->assertNull($obj->getCodeClassBTP());
        $this->assertNull($obj->getCodeDureeTrav());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeLibBPlaf());
        $this->assertNull($obj->getCodeLibBPlaf2());
        $this->assertNull($obj->getCodeLibBPlaf3());
        $this->assertNull($obj->getCodeLibBPlaf4());
        $this->assertNull($obj->getCodeLibBPlaf5());
        $this->assertNull($obj->getCodeLibBrut());
        $this->assertNull($obj->getCodeLibBrut2());
        $this->assertNull($obj->getCodeLibBrut3());
        $this->assertNull($obj->getCodeLibBrut4());
        $this->assertNull($obj->getCodeLibBrut5());
        $this->assertNull($obj->getCodeLibCSG());
        $this->assertNull($obj->getCodeLibIRC1());
        $this->assertNull($obj->getCodeLibIRC2());
        $this->assertNull($obj->getCodeLibIRC3());
        $this->assertNull($obj->getCodeLibSomme());
        $this->assertNull($obj->getCodeLibSomme2());
        $this->assertNull($obj->getCodeLibSomme3());
        $this->assertNull($obj->getCodeLibSomme4());
        $this->assertNull($obj->getCodeLibSomme5());
        $this->assertNull($obj->getCodeMetierBTP());
        $this->assertNull($obj->getCodeTypeBPlaf());
        $this->assertNull($obj->getCodeTypeBPlaf2());
        $this->assertNull($obj->getCodeTypeBPlaf3());
        $this->assertNull($obj->getCodeTypeBPlaf4());
        $this->assertNull($obj->getCodeTypeBPlaf5());
        $this->assertNull($obj->getCodeTypeBrut());
        $this->assertNull($obj->getCodeTypeBrut2());
        $this->assertNull($obj->getCodeTypeBrut3());
        $this->assertNull($obj->getCodeTypeBrut4());
        $this->assertNull($obj->getCodeTypeBrut5());
        $this->assertNull($obj->getCodeTypeSomme());
        $this->assertNull($obj->getCodeTypeSomme2());
        $this->assertNull($obj->getCodeTypeSomme3());
        $this->assertNull($obj->getCodeTypeSomme4());
        $this->assertNull($obj->getCodeTypeSomme5());
        $this->assertNull($obj->getCsgSpecif());
        $this->assertNull($obj->getDureeTrav());
        $this->assertNull($obj->getExoH_Code1());
        $this->assertNull($obj->getExoH_Code2());
        $this->assertNull($obj->getExoH_Code3());
        $this->assertNull($obj->getExoH_Code4());
        $this->assertNull($obj->getExoH_Code5());
        $this->assertNull($obj->getExoH_Mnt1());
        $this->assertNull($obj->getExoH_Mnt2());
        $this->assertNull($obj->getExoH_Mnt3());
        $this->assertNull($obj->getExoH_Mnt4());
        $this->assertNull($obj->getExoH_Mnt5());
        $this->assertNull($obj->getExoH_MntDeducCotPat1());
        $this->assertNull($obj->getExoH_MntDeducCotPat2());
        $this->assertNull($obj->getExoH_MntDeducCotPat3());
        $this->assertNull($obj->getExoH_MntDeducCotPat4());
        $this->assertNull($obj->getExoH_MntDeducCotPat5());
        $this->assertNull($obj->getExoH_MntDeducCotPatTot());
        $this->assertNull($obj->getExoH_MntReducCotSal1());
        $this->assertNull($obj->getExoH_MntReducCotSal2());
        $this->assertNull($obj->getExoH_MntReducCotSal3());
        $this->assertNull($obj->getExoH_MntReducCotSal4());
        $this->assertNull($obj->getExoH_MntReducCotSal5());
        $this->assertNull($obj->getExoH_MntReducCotSalTot());
        $this->assertNull($obj->getExoH_NbHJ1());
        $this->assertNull($obj->getExoH_NbHJ2());
        $this->assertNull($obj->getExoH_NbHJ3());
        $this->assertNull($obj->getExoH_NbHJ4());
        $this->assertNull($obj->getExoH_NbHJ5());
        $this->assertNull($obj->getFormaPro_Base());
        $this->assertNull($obj->getFormaPro_BaseCDD());
        $this->assertNull($obj->getIndCp());
        $this->assertNull($obj->getIndIntemp());
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
        $this->assertNull($obj->getMtJRtt2007());
        $this->assertNull($obj->getNbJRtt2007());
        $this->assertNull($obj->getNbPeriode());
        $this->assertNull($obj->getNbhChomPartiel());
        $this->assertNull($obj->getNbhSemIrcantec());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getNumeroOrdre());
        $this->assertNull($obj->getPlafIrcantec());
        $this->assertNull($obj->getQualifUniteTemps());
        $this->assertNull($obj->getSupplFam());
        $this->assertNull($obj->getTaxeApprentissage_Base());
        $this->assertNull($obj->getTaxeSalaire());
        $this->assertNull($obj->getTrAIrcantec());
        $this->assertNull($obj->getTrBIrcantec());
    }

    /**
     * Tests the setAnciennBtp() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetAnciennBtp() {

        $obj = new EmpDADSUCalcul();

        $obj->setAnciennBtp(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getAnciennBtp());
    }

    /**
     * Tests the setAnneeSommeIsol() method.
     *
     * @return void
     */
    public function testSetAnneeSommeIsol() {

        $obj = new EmpDADSUCalcul();

        $obj->setAnneeSommeIsol("anneeSommeIsol");
        $this->assertEquals("anneeSommeIsol", $obj->getAnneeSommeIsol());
    }

    /**
     * Tests the setAnneeSommeIsol2() method.
     *
     * @return void
     */
    public function testSetAnneeSommeIsol2() {

        $obj = new EmpDADSUCalcul();

        $obj->setAnneeSommeIsol2("anneeSommeIsol2");
        $this->assertEquals("anneeSommeIsol2", $obj->getAnneeSommeIsol2());
    }

    /**
     * Tests the setAnneeSommeIsol3() method.
     *
     * @return void
     */
    public function testSetAnneeSommeIsol3() {

        $obj = new EmpDADSUCalcul();

        $obj->setAnneeSommeIsol3("anneeSommeIsol3");
        $this->assertEquals("anneeSommeIsol3", $obj->getAnneeSommeIsol3());
    }

    /**
     * Tests the setAnneeSommeIsol4() method.
     *
     * @return void
     */
    public function testSetAnneeSommeIsol4() {

        $obj = new EmpDADSUCalcul();

        $obj->setAnneeSommeIsol4("anneeSommeIsol4");
        $this->assertEquals("anneeSommeIsol4", $obj->getAnneeSommeIsol4());
    }

    /**
     * Tests the setAnneeSommeIsol5() method.
     *
     * @return void
     */
    public function testSetAnneeSommeIsol5() {

        $obj = new EmpDADSUCalcul();

        $obj->setAnneeSommeIsol5("anneeSommeIsol5");
        $this->assertEquals("anneeSommeIsol5", $obj->getAnneeSommeIsol5());
    }

    /**
     * Tests the setBTPSalMoyen() method.
     *
     * @return void
     */
    public function testSetBTPSalMoyen() {

        $obj = new EmpDADSUCalcul();

        $obj->setBTPSalMoyen(10.092018);
        $this->assertEquals(10.092018, $obj->getBTPSalMoyen());
    }

    /**
     * Tests the setBaseBruteCPBTP() method.
     *
     * @return void
     */
    public function testSetBaseBruteCPBTP() {

        $obj = new EmpDADSUCalcul();

        $obj->setBaseBruteCPBTP(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseBruteCPBTP());
    }

    /**
     * Tests the setBaseBruteCotCCPBTP() method.
     *
     * @return void
     */
    public function testSetBaseBruteCotCCPBTP() {

        $obj = new EmpDADSUCalcul();

        $obj->setBaseBruteCotCCPBTP(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseBruteCotCCPBTP());
    }

    /**
     * Tests the setBaseBruteCotOPPBTP() method.
     *
     * @return void
     */
    public function testSetBaseBruteCotOPPBTP() {

        $obj = new EmpDADSUCalcul();

        $obj->setBaseBruteCotOPPBTP(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseBruteCotOPPBTP());
    }

    /**
     * Tests the setBenefAssedic() method.
     *
     * @return void
     */
    public function testSetBenefAssedic() {

        $obj = new EmpDADSUCalcul();

        $obj->setBenefAssedic("benefAssedic");
        $this->assertEquals("benefAssedic", $obj->getBenefAssedic());
    }

    /**
     * Tests the setBrutIrcantec() method.
     *
     * @return void
     */
    public function testSetBrutIrcantec() {

        $obj = new EmpDADSUCalcul();

        $obj->setBrutIrcantec(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutIrcantec());
    }

    /**
     * Tests the setCodeClassBTP() method.
     *
     * @return void
     */
    public function testSetCodeClassBTP() {

        $obj = new EmpDADSUCalcul();

        $obj->setCodeClassBTP("codeClassBTP");
        $this->assertEquals("codeClassBTP", $obj->getCodeClassBTP());
    }

    /**
     * Tests the setCodeDureeTrav() method.
     *
     * @return void
     */
    public function testSetCodeDureeTrav() {

        $obj = new EmpDADSUCalcul();

        $obj->setCodeDureeTrav("codeDureeTrav");
        $this->assertEquals("codeDureeTrav", $obj->getCodeDureeTrav());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new EmpDADSUCalcul();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCodeLibBPlaf() method.
     *
     * @return void
     */
    public function testSetCodeLibBPlaf() {

        $obj = new EmpDADSUCalcul();

        $obj->setCodeLibBPlaf("codeLibBPlaf");
        $this->assertEquals("codeLibBPlaf", $obj->getCodeLibBPlaf());
    }

    /**
     * Tests the setCodeLibBPlaf2() method.
     *
     * @return void
     */
    public function testSetCodeLibBPlaf2() {

        $obj = new EmpDADSUCalcul();

        $obj->setCodeLibBPlaf2("codeLibBPlaf2");
        $this->assertEquals("codeLibBPlaf2", $obj->getCodeLibBPlaf2());
    }

    /**
     * Tests the setCodeLibBPlaf3() method.
     *
     * @return void
     */
    public function testSetCodeLibBPlaf3() {

        $obj = new EmpDADSUCalcul();

        $obj->setCodeLibBPlaf3("codeLibBPlaf3");
        $this->assertEquals("codeLibBPlaf3", $obj->getCodeLibBPlaf3());
    }

    /**
     * Tests the setCodeLibBPlaf4() method.
     *
     * @return void
     */
    public function testSetCodeLibBPlaf4() {

        $obj = new EmpDADSUCalcul();

        $obj->setCodeLibBPlaf4("codeLibBPlaf4");
        $this->assertEquals("codeLibBPlaf4", $obj->getCodeLibBPlaf4());
    }

    /**
     * Tests the setCodeLibBPlaf5() method.
     *
     * @return void
     */
    public function testSetCodeLibBPlaf5() {

        $obj = new EmpDADSUCalcul();

        $obj->setCodeLibBPlaf5("codeLibBPlaf5");
        $this->assertEquals("codeLibBPlaf5", $obj->getCodeLibBPlaf5());
    }

    /**
     * Tests the setCodeLibBrut() method.
     *
     * @return void
     */
    public function testSetCodeLibBrut() {

        $obj = new EmpDADSUCalcul();

        $obj->setCodeLibBrut("codeLibBrut");
        $this->assertEquals("codeLibBrut", $obj->getCodeLibBrut());
    }

    /**
     * Tests the setCodeLibBrut2() method.
     *
     * @return void
     */
    public function testSetCodeLibBrut2() {

        $obj = new EmpDADSUCalcul();

        $obj->setCodeLibBrut2("codeLibBrut2");
        $this->assertEquals("codeLibBrut2", $obj->getCodeLibBrut2());
    }

    /**
     * Tests the setCodeLibBrut3() method.
     *
     * @return void
     */
    public function testSetCodeLibBrut3() {

        $obj = new EmpDADSUCalcul();

        $obj->setCodeLibBrut3("codeLibBrut3");
        $this->assertEquals("codeLibBrut3", $obj->getCodeLibBrut3());
    }

    /**
     * Tests the setCodeLibBrut4() method.
     *
     * @return void
     */
    public function testSetCodeLibBrut4() {

        $obj = new EmpDADSUCalcul();

        $obj->setCodeLibBrut4("codeLibBrut4");
        $this->assertEquals("codeLibBrut4", $obj->getCodeLibBrut4());
    }

    /**
     * Tests the setCodeLibBrut5() method.
     *
     * @return void
     */
    public function testSetCodeLibBrut5() {

        $obj = new EmpDADSUCalcul();

        $obj->setCodeLibBrut5("codeLibBrut5");
        $this->assertEquals("codeLibBrut5", $obj->getCodeLibBrut5());
    }

    /**
     * Tests the setCodeLibCSG() method.
     *
     * @return void
     */
    public function testSetCodeLibCSG() {

        $obj = new EmpDADSUCalcul();

        $obj->setCodeLibCSG("codeLibCSG");
        $this->assertEquals("codeLibCSG", $obj->getCodeLibCSG());
    }

    /**
     * Tests the setCodeLibIRC1() method.
     *
     * @return void
     */
    public function testSetCodeLibIRC1() {

        $obj = new EmpDADSUCalcul();

        $obj->setCodeLibIRC1("codeLibIRC1");
        $this->assertEquals("codeLibIRC1", $obj->getCodeLibIRC1());
    }

    /**
     * Tests the setCodeLibIRC2() method.
     *
     * @return void
     */
    public function testSetCodeLibIRC2() {

        $obj = new EmpDADSUCalcul();

        $obj->setCodeLibIRC2("codeLibIRC2");
        $this->assertEquals("codeLibIRC2", $obj->getCodeLibIRC2());
    }

    /**
     * Tests the setCodeLibIRC3() method.
     *
     * @return void
     */
    public function testSetCodeLibIRC3() {

        $obj = new EmpDADSUCalcul();

        $obj->setCodeLibIRC3("codeLibIRC3");
        $this->assertEquals("codeLibIRC3", $obj->getCodeLibIRC3());
    }

    /**
     * Tests the setCodeLibSomme() method.
     *
     * @return void
     */
    public function testSetCodeLibSomme() {

        $obj = new EmpDADSUCalcul();

        $obj->setCodeLibSomme("codeLibSomme");
        $this->assertEquals("codeLibSomme", $obj->getCodeLibSomme());
    }

    /**
     * Tests the setCodeLibSomme2() method.
     *
     * @return void
     */
    public function testSetCodeLibSomme2() {

        $obj = new EmpDADSUCalcul();

        $obj->setCodeLibSomme2("codeLibSomme2");
        $this->assertEquals("codeLibSomme2", $obj->getCodeLibSomme2());
    }

    /**
     * Tests the setCodeLibSomme3() method.
     *
     * @return void
     */
    public function testSetCodeLibSomme3() {

        $obj = new EmpDADSUCalcul();

        $obj->setCodeLibSomme3("codeLibSomme3");
        $this->assertEquals("codeLibSomme3", $obj->getCodeLibSomme3());
    }

    /**
     * Tests the setCodeLibSomme4() method.
     *
     * @return void
     */
    public function testSetCodeLibSomme4() {

        $obj = new EmpDADSUCalcul();

        $obj->setCodeLibSomme4("codeLibSomme4");
        $this->assertEquals("codeLibSomme4", $obj->getCodeLibSomme4());
    }

    /**
     * Tests the setCodeLibSomme5() method.
     *
     * @return void
     */
    public function testSetCodeLibSomme5() {

        $obj = new EmpDADSUCalcul();

        $obj->setCodeLibSomme5("codeLibSomme5");
        $this->assertEquals("codeLibSomme5", $obj->getCodeLibSomme5());
    }

    /**
     * Tests the setCodeMetierBTP() method.
     *
     * @return void
     */
    public function testSetCodeMetierBTP() {

        $obj = new EmpDADSUCalcul();

        $obj->setCodeMetierBTP("codeMetierBTP");
        $this->assertEquals("codeMetierBTP", $obj->getCodeMetierBTP());
    }

    /**
     * Tests the setCodeTypeBPlaf() method.
     *
     * @return void
     */
    public function testSetCodeTypeBPlaf() {

        $obj = new EmpDADSUCalcul();

        $obj->setCodeTypeBPlaf("codeTypeBPlaf");
        $this->assertEquals("codeTypeBPlaf", $obj->getCodeTypeBPlaf());
    }

    /**
     * Tests the setCodeTypeBPlaf2() method.
     *
     * @return void
     */
    public function testSetCodeTypeBPlaf2() {

        $obj = new EmpDADSUCalcul();

        $obj->setCodeTypeBPlaf2("codeTypeBPlaf2");
        $this->assertEquals("codeTypeBPlaf2", $obj->getCodeTypeBPlaf2());
    }

    /**
     * Tests the setCodeTypeBPlaf3() method.
     *
     * @return void
     */
    public function testSetCodeTypeBPlaf3() {

        $obj = new EmpDADSUCalcul();

        $obj->setCodeTypeBPlaf3("codeTypeBPlaf3");
        $this->assertEquals("codeTypeBPlaf3", $obj->getCodeTypeBPlaf3());
    }

    /**
     * Tests the setCodeTypeBPlaf4() method.
     *
     * @return void
     */
    public function testSetCodeTypeBPlaf4() {

        $obj = new EmpDADSUCalcul();

        $obj->setCodeTypeBPlaf4("codeTypeBPlaf4");
        $this->assertEquals("codeTypeBPlaf4", $obj->getCodeTypeBPlaf4());
    }

    /**
     * Tests the setCodeTypeBPlaf5() method.
     *
     * @return void
     */
    public function testSetCodeTypeBPlaf5() {

        $obj = new EmpDADSUCalcul();

        $obj->setCodeTypeBPlaf5("codeTypeBPlaf5");
        $this->assertEquals("codeTypeBPlaf5", $obj->getCodeTypeBPlaf5());
    }

    /**
     * Tests the setCodeTypeBrut() method.
     *
     * @return void
     */
    public function testSetCodeTypeBrut() {

        $obj = new EmpDADSUCalcul();

        $obj->setCodeTypeBrut("codeTypeBrut");
        $this->assertEquals("codeTypeBrut", $obj->getCodeTypeBrut());
    }

    /**
     * Tests the setCodeTypeBrut2() method.
     *
     * @return void
     */
    public function testSetCodeTypeBrut2() {

        $obj = new EmpDADSUCalcul();

        $obj->setCodeTypeBrut2("codeTypeBrut2");
        $this->assertEquals("codeTypeBrut2", $obj->getCodeTypeBrut2());
    }

    /**
     * Tests the setCodeTypeBrut3() method.
     *
     * @return void
     */
    public function testSetCodeTypeBrut3() {

        $obj = new EmpDADSUCalcul();

        $obj->setCodeTypeBrut3("codeTypeBrut3");
        $this->assertEquals("codeTypeBrut3", $obj->getCodeTypeBrut3());
    }

    /**
     * Tests the setCodeTypeBrut4() method.
     *
     * @return void
     */
    public function testSetCodeTypeBrut4() {

        $obj = new EmpDADSUCalcul();

        $obj->setCodeTypeBrut4("codeTypeBrut4");
        $this->assertEquals("codeTypeBrut4", $obj->getCodeTypeBrut4());
    }

    /**
     * Tests the setCodeTypeBrut5() method.
     *
     * @return void
     */
    public function testSetCodeTypeBrut5() {

        $obj = new EmpDADSUCalcul();

        $obj->setCodeTypeBrut5("codeTypeBrut5");
        $this->assertEquals("codeTypeBrut5", $obj->getCodeTypeBrut5());
    }

    /**
     * Tests the setCodeTypeSomme() method.
     *
     * @return void
     */
    public function testSetCodeTypeSomme() {

        $obj = new EmpDADSUCalcul();

        $obj->setCodeTypeSomme("codeTypeSomme");
        $this->assertEquals("codeTypeSomme", $obj->getCodeTypeSomme());
    }

    /**
     * Tests the setCodeTypeSomme2() method.
     *
     * @return void
     */
    public function testSetCodeTypeSomme2() {

        $obj = new EmpDADSUCalcul();

        $obj->setCodeTypeSomme2("codeTypeSomme2");
        $this->assertEquals("codeTypeSomme2", $obj->getCodeTypeSomme2());
    }

    /**
     * Tests the setCodeTypeSomme3() method.
     *
     * @return void
     */
    public function testSetCodeTypeSomme3() {

        $obj = new EmpDADSUCalcul();

        $obj->setCodeTypeSomme3("codeTypeSomme3");
        $this->assertEquals("codeTypeSomme3", $obj->getCodeTypeSomme3());
    }

    /**
     * Tests the setCodeTypeSomme4() method.
     *
     * @return void
     */
    public function testSetCodeTypeSomme4() {

        $obj = new EmpDADSUCalcul();

        $obj->setCodeTypeSomme4("codeTypeSomme4");
        $this->assertEquals("codeTypeSomme4", $obj->getCodeTypeSomme4());
    }

    /**
     * Tests the setCodeTypeSomme5() method.
     *
     * @return void
     */
    public function testSetCodeTypeSomme5() {

        $obj = new EmpDADSUCalcul();

        $obj->setCodeTypeSomme5("codeTypeSomme5");
        $this->assertEquals("codeTypeSomme5", $obj->getCodeTypeSomme5());
    }

    /**
     * Tests the setCsgSpecif() method.
     *
     * @return void
     */
    public function testSetCsgSpecif() {

        $obj = new EmpDADSUCalcul();

        $obj->setCsgSpecif(10.092018);
        $this->assertEquals(10.092018, $obj->getCsgSpecif());
    }

    /**
     * Tests the setDureeTrav() method.
     *
     * @return void
     */
    public function testSetDureeTrav() {

        $obj = new EmpDADSUCalcul();

        $obj->setDureeTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeTrav());
    }

    /**
     * Tests the setExoH_Code1() method.
     *
     * @return void
     */
    public function testSetExoH_Code1() {

        $obj = new EmpDADSUCalcul();

        $obj->setExoH_Code1("exoH_Code1");
        $this->assertEquals("exoH_Code1", $obj->getExoH_Code1());
    }

    /**
     * Tests the setExoH_Code2() method.
     *
     * @return void
     */
    public function testSetExoH_Code2() {

        $obj = new EmpDADSUCalcul();

        $obj->setExoH_Code2("exoH_Code2");
        $this->assertEquals("exoH_Code2", $obj->getExoH_Code2());
    }

    /**
     * Tests the setExoH_Code3() method.
     *
     * @return void
     */
    public function testSetExoH_Code3() {

        $obj = new EmpDADSUCalcul();

        $obj->setExoH_Code3("exoH_Code3");
        $this->assertEquals("exoH_Code3", $obj->getExoH_Code3());
    }

    /**
     * Tests the setExoH_Code4() method.
     *
     * @return void
     */
    public function testSetExoH_Code4() {

        $obj = new EmpDADSUCalcul();

        $obj->setExoH_Code4("exoH_Code4");
        $this->assertEquals("exoH_Code4", $obj->getExoH_Code4());
    }

    /**
     * Tests the setExoH_Code5() method.
     *
     * @return void
     */
    public function testSetExoH_Code5() {

        $obj = new EmpDADSUCalcul();

        $obj->setExoH_Code5("exoH_Code5");
        $this->assertEquals("exoH_Code5", $obj->getExoH_Code5());
    }

    /**
     * Tests the setExoH_Mnt1() method.
     *
     * @return void
     */
    public function testSetExoH_Mnt1() {

        $obj = new EmpDADSUCalcul();

        $obj->setExoH_Mnt1(10.092018);
        $this->assertEquals(10.092018, $obj->getExoH_Mnt1());
    }

    /**
     * Tests the setExoH_Mnt2() method.
     *
     * @return void
     */
    public function testSetExoH_Mnt2() {

        $obj = new EmpDADSUCalcul();

        $obj->setExoH_Mnt2(10.092018);
        $this->assertEquals(10.092018, $obj->getExoH_Mnt2());
    }

    /**
     * Tests the setExoH_Mnt3() method.
     *
     * @return void
     */
    public function testSetExoH_Mnt3() {

        $obj = new EmpDADSUCalcul();

        $obj->setExoH_Mnt3(10.092018);
        $this->assertEquals(10.092018, $obj->getExoH_Mnt3());
    }

    /**
     * Tests the setExoH_Mnt4() method.
     *
     * @return void
     */
    public function testSetExoH_Mnt4() {

        $obj = new EmpDADSUCalcul();

        $obj->setExoH_Mnt4(10.092018);
        $this->assertEquals(10.092018, $obj->getExoH_Mnt4());
    }

    /**
     * Tests the setExoH_Mnt5() method.
     *
     * @return void
     */
    public function testSetExoH_Mnt5() {

        $obj = new EmpDADSUCalcul();

        $obj->setExoH_Mnt5(10.092018);
        $this->assertEquals(10.092018, $obj->getExoH_Mnt5());
    }

    /**
     * Tests the setExoH_MntDeducCotPat1() method.
     *
     * @return void
     */
    public function testSetExoH_MntDeducCotPat1() {

        $obj = new EmpDADSUCalcul();

        $obj->setExoH_MntDeducCotPat1(10.092018);
        $this->assertEquals(10.092018, $obj->getExoH_MntDeducCotPat1());
    }

    /**
     * Tests the setExoH_MntDeducCotPat2() method.
     *
     * @return void
     */
    public function testSetExoH_MntDeducCotPat2() {

        $obj = new EmpDADSUCalcul();

        $obj->setExoH_MntDeducCotPat2(10.092018);
        $this->assertEquals(10.092018, $obj->getExoH_MntDeducCotPat2());
    }

    /**
     * Tests the setExoH_MntDeducCotPat3() method.
     *
     * @return void
     */
    public function testSetExoH_MntDeducCotPat3() {

        $obj = new EmpDADSUCalcul();

        $obj->setExoH_MntDeducCotPat3(10.092018);
        $this->assertEquals(10.092018, $obj->getExoH_MntDeducCotPat3());
    }

    /**
     * Tests the setExoH_MntDeducCotPat4() method.
     *
     * @return void
     */
    public function testSetExoH_MntDeducCotPat4() {

        $obj = new EmpDADSUCalcul();

        $obj->setExoH_MntDeducCotPat4(10.092018);
        $this->assertEquals(10.092018, $obj->getExoH_MntDeducCotPat4());
    }

    /**
     * Tests the setExoH_MntDeducCotPat5() method.
     *
     * @return void
     */
    public function testSetExoH_MntDeducCotPat5() {

        $obj = new EmpDADSUCalcul();

        $obj->setExoH_MntDeducCotPat5(10.092018);
        $this->assertEquals(10.092018, $obj->getExoH_MntDeducCotPat5());
    }

    /**
     * Tests the setExoH_MntDeducCotPatTot() method.
     *
     * @return void
     */
    public function testSetExoH_MntDeducCotPatTot() {

        $obj = new EmpDADSUCalcul();

        $obj->setExoH_MntDeducCotPatTot(10.092018);
        $this->assertEquals(10.092018, $obj->getExoH_MntDeducCotPatTot());
    }

    /**
     * Tests the setExoH_MntReducCotSal1() method.
     *
     * @return void
     */
    public function testSetExoH_MntReducCotSal1() {

        $obj = new EmpDADSUCalcul();

        $obj->setExoH_MntReducCotSal1(10.092018);
        $this->assertEquals(10.092018, $obj->getExoH_MntReducCotSal1());
    }

    /**
     * Tests the setExoH_MntReducCotSal2() method.
     *
     * @return void
     */
    public function testSetExoH_MntReducCotSal2() {

        $obj = new EmpDADSUCalcul();

        $obj->setExoH_MntReducCotSal2(10.092018);
        $this->assertEquals(10.092018, $obj->getExoH_MntReducCotSal2());
    }

    /**
     * Tests the setExoH_MntReducCotSal3() method.
     *
     * @return void
     */
    public function testSetExoH_MntReducCotSal3() {

        $obj = new EmpDADSUCalcul();

        $obj->setExoH_MntReducCotSal3(10.092018);
        $this->assertEquals(10.092018, $obj->getExoH_MntReducCotSal3());
    }

    /**
     * Tests the setExoH_MntReducCotSal4() method.
     *
     * @return void
     */
    public function testSetExoH_MntReducCotSal4() {

        $obj = new EmpDADSUCalcul();

        $obj->setExoH_MntReducCotSal4(10.092018);
        $this->assertEquals(10.092018, $obj->getExoH_MntReducCotSal4());
    }

    /**
     * Tests the setExoH_MntReducCotSal5() method.
     *
     * @return void
     */
    public function testSetExoH_MntReducCotSal5() {

        $obj = new EmpDADSUCalcul();

        $obj->setExoH_MntReducCotSal5(10.092018);
        $this->assertEquals(10.092018, $obj->getExoH_MntReducCotSal5());
    }

    /**
     * Tests the setExoH_MntReducCotSalTot() method.
     *
     * @return void
     */
    public function testSetExoH_MntReducCotSalTot() {

        $obj = new EmpDADSUCalcul();

        $obj->setExoH_MntReducCotSalTot(10.092018);
        $this->assertEquals(10.092018, $obj->getExoH_MntReducCotSalTot());
    }

    /**
     * Tests the setExoH_NbHJ1() method.
     *
     * @return void
     */
    public function testSetExoH_NbHJ1() {

        $obj = new EmpDADSUCalcul();

        $obj->setExoH_NbHJ1(10.092018);
        $this->assertEquals(10.092018, $obj->getExoH_NbHJ1());
    }

    /**
     * Tests the setExoH_NbHJ2() method.
     *
     * @return void
     */
    public function testSetExoH_NbHJ2() {

        $obj = new EmpDADSUCalcul();

        $obj->setExoH_NbHJ2(10.092018);
        $this->assertEquals(10.092018, $obj->getExoH_NbHJ2());
    }

    /**
     * Tests the setExoH_NbHJ3() method.
     *
     * @return void
     */
    public function testSetExoH_NbHJ3() {

        $obj = new EmpDADSUCalcul();

        $obj->setExoH_NbHJ3(10.092018);
        $this->assertEquals(10.092018, $obj->getExoH_NbHJ3());
    }

    /**
     * Tests the setExoH_NbHJ4() method.
     *
     * @return void
     */
    public function testSetExoH_NbHJ4() {

        $obj = new EmpDADSUCalcul();

        $obj->setExoH_NbHJ4(10.092018);
        $this->assertEquals(10.092018, $obj->getExoH_NbHJ4());
    }

    /**
     * Tests the setExoH_NbHJ5() method.
     *
     * @return void
     */
    public function testSetExoH_NbHJ5() {

        $obj = new EmpDADSUCalcul();

        $obj->setExoH_NbHJ5(10.092018);
        $this->assertEquals(10.092018, $obj->getExoH_NbHJ5());
    }

    /**
     * Tests the setFormaPro_Base() method.
     *
     * @return void
     */
    public function testSetFormaPro_Base() {

        $obj = new EmpDADSUCalcul();

        $obj->setFormaPro_Base(10.092018);
        $this->assertEquals(10.092018, $obj->getFormaPro_Base());
    }

    /**
     * Tests the setFormaPro_BaseCDD() method.
     *
     * @return void
     */
    public function testSetFormaPro_BaseCDD() {

        $obj = new EmpDADSUCalcul();

        $obj->setFormaPro_BaseCDD(10.092018);
        $this->assertEquals(10.092018, $obj->getFormaPro_BaseCDD());
    }

    /**
     * Tests the setIndCp() method.
     *
     * @return void
     */
    public function testSetIndCp() {

        $obj = new EmpDADSUCalcul();

        $obj->setIndCp(10.092018);
        $this->assertEquals(10.092018, $obj->getIndCp());
    }

    /**
     * Tests the setIndIntemp() method.
     *
     * @return void
     */
    public function testSetIndIntemp() {

        $obj = new EmpDADSUCalcul();

        $obj->setIndIntemp(10.092018);
        $this->assertEquals(10.092018, $obj->getIndIntemp());
    }

    /**
     * Tests the setMontantBPlaf() method.
     *
     * @return void
     */
    public function testSetMontantBPlaf() {

        $obj = new EmpDADSUCalcul();

        $obj->setMontantBPlaf(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBPlaf());
    }

    /**
     * Tests the setMontantBPlaf2() method.
     *
     * @return void
     */
    public function testSetMontantBPlaf2() {

        $obj = new EmpDADSUCalcul();

        $obj->setMontantBPlaf2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBPlaf2());
    }

    /**
     * Tests the setMontantBPlaf3() method.
     *
     * @return void
     */
    public function testSetMontantBPlaf3() {

        $obj = new EmpDADSUCalcul();

        $obj->setMontantBPlaf3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBPlaf3());
    }

    /**
     * Tests the setMontantBPlaf4() method.
     *
     * @return void
     */
    public function testSetMontantBPlaf4() {

        $obj = new EmpDADSUCalcul();

        $obj->setMontantBPlaf4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBPlaf4());
    }

    /**
     * Tests the setMontantBPlaf5() method.
     *
     * @return void
     */
    public function testSetMontantBPlaf5() {

        $obj = new EmpDADSUCalcul();

        $obj->setMontantBPlaf5(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBPlaf5());
    }

    /**
     * Tests the setMontantBrut() method.
     *
     * @return void
     */
    public function testSetMontantBrut() {

        $obj = new EmpDADSUCalcul();

        $obj->setMontantBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBrut());
    }

    /**
     * Tests the setMontantBrut2() method.
     *
     * @return void
     */
    public function testSetMontantBrut2() {

        $obj = new EmpDADSUCalcul();

        $obj->setMontantBrut2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBrut2());
    }

    /**
     * Tests the setMontantBrut3() method.
     *
     * @return void
     */
    public function testSetMontantBrut3() {

        $obj = new EmpDADSUCalcul();

        $obj->setMontantBrut3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBrut3());
    }

    /**
     * Tests the setMontantBrut4() method.
     *
     * @return void
     */
    public function testSetMontantBrut4() {

        $obj = new EmpDADSUCalcul();

        $obj->setMontantBrut4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBrut4());
    }

    /**
     * Tests the setMontantBrut5() method.
     *
     * @return void
     */
    public function testSetMontantBrut5() {

        $obj = new EmpDADSUCalcul();

        $obj->setMontantBrut5(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBrut5());
    }

    /**
     * Tests the setMontantSommeIsolBrut() method.
     *
     * @return void
     */
    public function testSetMontantSommeIsolBrut() {

        $obj = new EmpDADSUCalcul();

        $obj->setMontantSommeIsolBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolBrut());
    }

    /**
     * Tests the setMontantSommeIsolBrut2() method.
     *
     * @return void
     */
    public function testSetMontantSommeIsolBrut2() {

        $obj = new EmpDADSUCalcul();

        $obj->setMontantSommeIsolBrut2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolBrut2());
    }

    /**
     * Tests the setMontantSommeIsolBrut3() method.
     *
     * @return void
     */
    public function testSetMontantSommeIsolBrut3() {

        $obj = new EmpDADSUCalcul();

        $obj->setMontantSommeIsolBrut3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolBrut3());
    }

    /**
     * Tests the setMontantSommeIsolBrut4() method.
     *
     * @return void
     */
    public function testSetMontantSommeIsolBrut4() {

        $obj = new EmpDADSUCalcul();

        $obj->setMontantSommeIsolBrut4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolBrut4());
    }

    /**
     * Tests the setMontantSommeIsolBrut5() method.
     *
     * @return void
     */
    public function testSetMontantSommeIsolBrut5() {

        $obj = new EmpDADSUCalcul();

        $obj->setMontantSommeIsolBrut5(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolBrut5());
    }

    /**
     * Tests the setMontantSommeIsolPlaf() method.
     *
     * @return void
     */
    public function testSetMontantSommeIsolPlaf() {

        $obj = new EmpDADSUCalcul();

        $obj->setMontantSommeIsolPlaf(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf());
    }

    /**
     * Tests the setMontantSommeIsolPlaf2() method.
     *
     * @return void
     */
    public function testSetMontantSommeIsolPlaf2() {

        $obj = new EmpDADSUCalcul();

        $obj->setMontantSommeIsolPlaf2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf2());
    }

    /**
     * Tests the setMontantSommeIsolPlaf3() method.
     *
     * @return void
     */
    public function testSetMontantSommeIsolPlaf3() {

        $obj = new EmpDADSUCalcul();

        $obj->setMontantSommeIsolPlaf3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf3());
    }

    /**
     * Tests the setMontantSommeIsolPlaf4() method.
     *
     * @return void
     */
    public function testSetMontantSommeIsolPlaf4() {

        $obj = new EmpDADSUCalcul();

        $obj->setMontantSommeIsolPlaf4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf4());
    }

    /**
     * Tests the setMontantSommeIsolPlaf5() method.
     *
     * @return void
     */
    public function testSetMontantSommeIsolPlaf5() {

        $obj = new EmpDADSUCalcul();

        $obj->setMontantSommeIsolPlaf5(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf5());
    }

    /**
     * Tests the setMtJRtt2007() method.
     *
     * @return void
     */
    public function testSetMtJRtt2007() {

        $obj = new EmpDADSUCalcul();

        $obj->setMtJRtt2007(10.092018);
        $this->assertEquals(10.092018, $obj->getMtJRtt2007());
    }

    /**
     * Tests the setNbJRtt2007() method.
     *
     * @return void
     */
    public function testSetNbJRtt2007() {

        $obj = new EmpDADSUCalcul();

        $obj->setNbJRtt2007(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJRtt2007());
    }

    /**
     * Tests the setNbPeriode() method.
     *
     * @return void
     */
    public function testSetNbPeriode() {

        $obj = new EmpDADSUCalcul();

        $obj->setNbPeriode(10.092018);
        $this->assertEquals(10.092018, $obj->getNbPeriode());
    }

    /**
     * Tests the setNbhChomPartiel() method.
     *
     * @return void
     */
    public function testSetNbhChomPartiel() {

        $obj = new EmpDADSUCalcul();

        $obj->setNbhChomPartiel(10.092018);
        $this->assertEquals(10.092018, $obj->getNbhChomPartiel());
    }

    /**
     * Tests the setNbhSemIrcantec() method.
     *
     * @return void
     */
    public function testSetNbhSemIrcantec() {

        $obj = new EmpDADSUCalcul();

        $obj->setNbhSemIrcantec(10.092018);
        $this->assertEquals(10.092018, $obj->getNbhSemIrcantec());
    }

    /**
     * Tests the setNumero() method.
     *
     * @return void
     */
    public function testSetNumero() {

        $obj = new EmpDADSUCalcul();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }

    /**
     * Tests the setNumeroOrdre() method.
     *
     * @return void
     */
    public function testSetNumeroOrdre() {

        $obj = new EmpDADSUCalcul();

        $obj->setNumeroOrdre(10);
        $this->assertEquals(10, $obj->getNumeroOrdre());
    }

    /**
     * Tests the setPlafIrcantec() method.
     *
     * @return void
     */
    public function testSetPlafIrcantec() {

        $obj = new EmpDADSUCalcul();

        $obj->setPlafIrcantec(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafIrcantec());
    }

    /**
     * Tests the setQualifUniteTemps() method.
     *
     * @return void
     */
    public function testSetQualifUniteTemps() {

        $obj = new EmpDADSUCalcul();

        $obj->setQualifUniteTemps("qualifUniteTemps");
        $this->assertEquals("qualifUniteTemps", $obj->getQualifUniteTemps());
    }

    /**
     * Tests the setSupplFam() method.
     *
     * @return void
     */
    public function testSetSupplFam() {

        $obj = new EmpDADSUCalcul();

        $obj->setSupplFam(10.092018);
        $this->assertEquals(10.092018, $obj->getSupplFam());
    }

    /**
     * Tests the setTaxeApprentissage_Base() method.
     *
     * @return void
     */
    public function testSetTaxeApprentissage_Base() {

        $obj = new EmpDADSUCalcul();

        $obj->setTaxeApprentissage_Base(10.092018);
        $this->assertEquals(10.092018, $obj->getTaxeApprentissage_Base());
    }

    /**
     * Tests the setTaxeSalaire() method.
     *
     * @return void
     */
    public function testSetTaxeSalaire() {

        $obj = new EmpDADSUCalcul();

        $obj->setTaxeSalaire(10.092018);
        $this->assertEquals(10.092018, $obj->getTaxeSalaire());
    }

    /**
     * Tests the setTrAIrcantec() method.
     *
     * @return void
     */
    public function testSetTrAIrcantec() {

        $obj = new EmpDADSUCalcul();

        $obj->setTrAIrcantec(10.092018);
        $this->assertEquals(10.092018, $obj->getTrAIrcantec());
    }

    /**
     * Tests the setTrBIrcantec() method.
     *
     * @return void
     */
    public function testSetTrBIrcantec() {

        $obj = new EmpDADSUCalcul();

        $obj->setTrBIrcantec(10.092018);
        $this->assertEquals(10.092018, $obj->getTrBIrcantec());
    }
}
