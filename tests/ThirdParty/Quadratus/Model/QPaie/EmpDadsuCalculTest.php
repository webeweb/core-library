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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\EmpDadsuCalcul;

/**
 * Emp dadsu calcul test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class EmpDadsuCalculTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new EmpDadsuCalcul();

        $this->assertNull($obj->getAnciennBtp());
        $this->assertNull($obj->getAnneeSommeIsol());
        $this->assertNull($obj->getAnneeSommeIsol2());
        $this->assertNull($obj->getAnneeSommeIsol3());
        $this->assertNull($obj->getAnneeSommeIsol4());
        $this->assertNull($obj->getAnneeSommeIsol5());
        $this->assertNull($obj->getBtpSalMoyen());
        $this->assertNull($obj->getBaseBruteCpbtp());
        $this->assertNull($obj->getBaseBruteCotCcpbtp());
        $this->assertNull($obj->getBaseBruteCotOppbtp());
        $this->assertNull($obj->getBenefAssedic());
        $this->assertNull($obj->getBrutIrcantec());
        $this->assertNull($obj->getCodeClassBtp());
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
        $this->assertNull($obj->getCodeLibCsg());
        $this->assertNull($obj->getCodeLibIrc1());
        $this->assertNull($obj->getCodeLibIrc2());
        $this->assertNull($obj->getCodeLibIrc3());
        $this->assertNull($obj->getCodeLibSomme());
        $this->assertNull($obj->getCodeLibSomme2());
        $this->assertNull($obj->getCodeLibSomme3());
        $this->assertNull($obj->getCodeLibSomme4());
        $this->assertNull($obj->getCodeLibSomme5());
        $this->assertNull($obj->getCodeMetierBtp());
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
        $this->assertNull($obj->getExoHCode1());
        $this->assertNull($obj->getExoHCode2());
        $this->assertNull($obj->getExoHCode3());
        $this->assertNull($obj->getExoHCode4());
        $this->assertNull($obj->getExoHCode5());
        $this->assertNull($obj->getExoHMnt1());
        $this->assertNull($obj->getExoHMnt2());
        $this->assertNull($obj->getExoHMnt3());
        $this->assertNull($obj->getExoHMnt4());
        $this->assertNull($obj->getExoHMnt5());
        $this->assertNull($obj->getExoHMntDeducCotPat1());
        $this->assertNull($obj->getExoHMntDeducCotPat2());
        $this->assertNull($obj->getExoHMntDeducCotPat3());
        $this->assertNull($obj->getExoHMntDeducCotPat4());
        $this->assertNull($obj->getExoHMntDeducCotPat5());
        $this->assertNull($obj->getExoHMntDeducCotPatTot());
        $this->assertNull($obj->getExoHMntReducCotSal1());
        $this->assertNull($obj->getExoHMntReducCotSal2());
        $this->assertNull($obj->getExoHMntReducCotSal3());
        $this->assertNull($obj->getExoHMntReducCotSal4());
        $this->assertNull($obj->getExoHMntReducCotSal5());
        $this->assertNull($obj->getExoHMntReducCotSalTot());
        $this->assertNull($obj->getExoHNbHj1());
        $this->assertNull($obj->getExoHNbHj2());
        $this->assertNull($obj->getExoHNbHj3());
        $this->assertNull($obj->getExoHNbHj4());
        $this->assertNull($obj->getExoHNbHj5());
        $this->assertNull($obj->getFormaProBase());
        $this->assertNull($obj->getFormaProBaseCdd());
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
        $this->assertNull($obj->getTaxeApprentissageBase());
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

        // Set a Date/time mock.
        $anciennBtp = new DateTime("2018-09-10");

        $obj = new EmpDadsuCalcul();

        $obj->setAnciennBtp($anciennBtp);
        $this->assertSame($anciennBtp, $obj->getAnciennBtp());
    }

    /**
     * Tests the setAnneeSommeIsol() method.
     *
     * @return void
     */
    public function testSetAnneeSommeIsol() {

        $obj = new EmpDadsuCalcul();

        $obj->setAnneeSommeIsol("anneeSommeIsol");
        $this->assertEquals("anneeSommeIsol", $obj->getAnneeSommeIsol());
    }

    /**
     * Tests the setAnneeSommeIsol2() method.
     *
     * @return void
     */
    public function testSetAnneeSommeIsol2() {

        $obj = new EmpDadsuCalcul();

        $obj->setAnneeSommeIsol2("anneeSommeIsol2");
        $this->assertEquals("anneeSommeIsol2", $obj->getAnneeSommeIsol2());
    }

    /**
     * Tests the setAnneeSommeIsol3() method.
     *
     * @return void
     */
    public function testSetAnneeSommeIsol3() {

        $obj = new EmpDadsuCalcul();

        $obj->setAnneeSommeIsol3("anneeSommeIsol3");
        $this->assertEquals("anneeSommeIsol3", $obj->getAnneeSommeIsol3());
    }

    /**
     * Tests the setAnneeSommeIsol4() method.
     *
     * @return void
     */
    public function testSetAnneeSommeIsol4() {

        $obj = new EmpDadsuCalcul();

        $obj->setAnneeSommeIsol4("anneeSommeIsol4");
        $this->assertEquals("anneeSommeIsol4", $obj->getAnneeSommeIsol4());
    }

    /**
     * Tests the setAnneeSommeIsol5() method.
     *
     * @return void
     */
    public function testSetAnneeSommeIsol5() {

        $obj = new EmpDadsuCalcul();

        $obj->setAnneeSommeIsol5("anneeSommeIsol5");
        $this->assertEquals("anneeSommeIsol5", $obj->getAnneeSommeIsol5());
    }

    /**
     * Tests the setBaseBruteCotCcpbtp() method.
     *
     * @return void
     */
    public function testSetBaseBruteCotCcpbtp() {

        $obj = new EmpDadsuCalcul();

        $obj->setBaseBruteCotCcpbtp(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseBruteCotCcpbtp());
    }

    /**
     * Tests the setBaseBruteCotOppbtp() method.
     *
     * @return void
     */
    public function testSetBaseBruteCotOppbtp() {

        $obj = new EmpDadsuCalcul();

        $obj->setBaseBruteCotOppbtp(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseBruteCotOppbtp());
    }

    /**
     * Tests the setBaseBruteCpbtp() method.
     *
     * @return void
     */
    public function testSetBaseBruteCpbtp() {

        $obj = new EmpDadsuCalcul();

        $obj->setBaseBruteCpbtp(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseBruteCpbtp());
    }

    /**
     * Tests the setBenefAssedic() method.
     *
     * @return void
     */
    public function testSetBenefAssedic() {

        $obj = new EmpDadsuCalcul();

        $obj->setBenefAssedic("benefAssedic");
        $this->assertEquals("benefAssedic", $obj->getBenefAssedic());
    }

    /**
     * Tests the setBrutIrcantec() method.
     *
     * @return void
     */
    public function testSetBrutIrcantec() {

        $obj = new EmpDadsuCalcul();

        $obj->setBrutIrcantec(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutIrcantec());
    }

    /**
     * Tests the setBtpSalMoyen() method.
     *
     * @return void
     */
    public function testSetBtpSalMoyen() {

        $obj = new EmpDadsuCalcul();

        $obj->setBtpSalMoyen(10.092018);
        $this->assertEquals(10.092018, $obj->getBtpSalMoyen());
    }

    /**
     * Tests the setCodeClassBtp() method.
     *
     * @return void
     */
    public function testSetCodeClassBtp() {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeClassBtp("codeClassBtp");
        $this->assertEquals("codeClassBtp", $obj->getCodeClassBtp());
    }

    /**
     * Tests the setCodeDureeTrav() method.
     *
     * @return void
     */
    public function testSetCodeDureeTrav() {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeDureeTrav("codeDureeTrav");
        $this->assertEquals("codeDureeTrav", $obj->getCodeDureeTrav());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCodeLibBPlaf() method.
     *
     * @return void
     */
    public function testSetCodeLibBPlaf() {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeLibBPlaf("codeLibBPlaf");
        $this->assertEquals("codeLibBPlaf", $obj->getCodeLibBPlaf());
    }

    /**
     * Tests the setCodeLibBPlaf2() method.
     *
     * @return void
     */
    public function testSetCodeLibBPlaf2() {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeLibBPlaf2("codeLibBPlaf2");
        $this->assertEquals("codeLibBPlaf2", $obj->getCodeLibBPlaf2());
    }

    /**
     * Tests the setCodeLibBPlaf3() method.
     *
     * @return void
     */
    public function testSetCodeLibBPlaf3() {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeLibBPlaf3("codeLibBPlaf3");
        $this->assertEquals("codeLibBPlaf3", $obj->getCodeLibBPlaf3());
    }

    /**
     * Tests the setCodeLibBPlaf4() method.
     *
     * @return void
     */
    public function testSetCodeLibBPlaf4() {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeLibBPlaf4("codeLibBPlaf4");
        $this->assertEquals("codeLibBPlaf4", $obj->getCodeLibBPlaf4());
    }

    /**
     * Tests the setCodeLibBPlaf5() method.
     *
     * @return void
     */
    public function testSetCodeLibBPlaf5() {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeLibBPlaf5("codeLibBPlaf5");
        $this->assertEquals("codeLibBPlaf5", $obj->getCodeLibBPlaf5());
    }

    /**
     * Tests the setCodeLibBrut() method.
     *
     * @return void
     */
    public function testSetCodeLibBrut() {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeLibBrut("codeLibBrut");
        $this->assertEquals("codeLibBrut", $obj->getCodeLibBrut());
    }

    /**
     * Tests the setCodeLibBrut2() method.
     *
     * @return void
     */
    public function testSetCodeLibBrut2() {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeLibBrut2("codeLibBrut2");
        $this->assertEquals("codeLibBrut2", $obj->getCodeLibBrut2());
    }

    /**
     * Tests the setCodeLibBrut3() method.
     *
     * @return void
     */
    public function testSetCodeLibBrut3() {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeLibBrut3("codeLibBrut3");
        $this->assertEquals("codeLibBrut3", $obj->getCodeLibBrut3());
    }

    /**
     * Tests the setCodeLibBrut4() method.
     *
     * @return void
     */
    public function testSetCodeLibBrut4() {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeLibBrut4("codeLibBrut4");
        $this->assertEquals("codeLibBrut4", $obj->getCodeLibBrut4());
    }

    /**
     * Tests the setCodeLibBrut5() method.
     *
     * @return void
     */
    public function testSetCodeLibBrut5() {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeLibBrut5("codeLibBrut5");
        $this->assertEquals("codeLibBrut5", $obj->getCodeLibBrut5());
    }

    /**
     * Tests the setCodeLibCsg() method.
     *
     * @return void
     */
    public function testSetCodeLibCsg() {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeLibCsg("codeLibCsg");
        $this->assertEquals("codeLibCsg", $obj->getCodeLibCsg());
    }

    /**
     * Tests the setCodeLibIrc1() method.
     *
     * @return void
     */
    public function testSetCodeLibIrc1() {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeLibIrc1("codeLibIrc1");
        $this->assertEquals("codeLibIrc1", $obj->getCodeLibIrc1());
    }

    /**
     * Tests the setCodeLibIrc2() method.
     *
     * @return void
     */
    public function testSetCodeLibIrc2() {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeLibIrc2("codeLibIrc2");
        $this->assertEquals("codeLibIrc2", $obj->getCodeLibIrc2());
    }

    /**
     * Tests the setCodeLibIrc3() method.
     *
     * @return void
     */
    public function testSetCodeLibIrc3() {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeLibIrc3("codeLibIrc3");
        $this->assertEquals("codeLibIrc3", $obj->getCodeLibIrc3());
    }

    /**
     * Tests the setCodeLibSomme() method.
     *
     * @return void
     */
    public function testSetCodeLibSomme() {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeLibSomme("codeLibSomme");
        $this->assertEquals("codeLibSomme", $obj->getCodeLibSomme());
    }

    /**
     * Tests the setCodeLibSomme2() method.
     *
     * @return void
     */
    public function testSetCodeLibSomme2() {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeLibSomme2("codeLibSomme2");
        $this->assertEquals("codeLibSomme2", $obj->getCodeLibSomme2());
    }

    /**
     * Tests the setCodeLibSomme3() method.
     *
     * @return void
     */
    public function testSetCodeLibSomme3() {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeLibSomme3("codeLibSomme3");
        $this->assertEquals("codeLibSomme3", $obj->getCodeLibSomme3());
    }

    /**
     * Tests the setCodeLibSomme4() method.
     *
     * @return void
     */
    public function testSetCodeLibSomme4() {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeLibSomme4("codeLibSomme4");
        $this->assertEquals("codeLibSomme4", $obj->getCodeLibSomme4());
    }

    /**
     * Tests the setCodeLibSomme5() method.
     *
     * @return void
     */
    public function testSetCodeLibSomme5() {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeLibSomme5("codeLibSomme5");
        $this->assertEquals("codeLibSomme5", $obj->getCodeLibSomme5());
    }

    /**
     * Tests the setCodeMetierBtp() method.
     *
     * @return void
     */
    public function testSetCodeMetierBtp() {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeMetierBtp("codeMetierBtp");
        $this->assertEquals("codeMetierBtp", $obj->getCodeMetierBtp());
    }

    /**
     * Tests the setCodeTypeBPlaf() method.
     *
     * @return void
     */
    public function testSetCodeTypeBPlaf() {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeTypeBPlaf("codeTypeBPlaf");
        $this->assertEquals("codeTypeBPlaf", $obj->getCodeTypeBPlaf());
    }

    /**
     * Tests the setCodeTypeBPlaf2() method.
     *
     * @return void
     */
    public function testSetCodeTypeBPlaf2() {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeTypeBPlaf2("codeTypeBPlaf2");
        $this->assertEquals("codeTypeBPlaf2", $obj->getCodeTypeBPlaf2());
    }

    /**
     * Tests the setCodeTypeBPlaf3() method.
     *
     * @return void
     */
    public function testSetCodeTypeBPlaf3() {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeTypeBPlaf3("codeTypeBPlaf3");
        $this->assertEquals("codeTypeBPlaf3", $obj->getCodeTypeBPlaf3());
    }

    /**
     * Tests the setCodeTypeBPlaf4() method.
     *
     * @return void
     */
    public function testSetCodeTypeBPlaf4() {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeTypeBPlaf4("codeTypeBPlaf4");
        $this->assertEquals("codeTypeBPlaf4", $obj->getCodeTypeBPlaf4());
    }

    /**
     * Tests the setCodeTypeBPlaf5() method.
     *
     * @return void
     */
    public function testSetCodeTypeBPlaf5() {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeTypeBPlaf5("codeTypeBPlaf5");
        $this->assertEquals("codeTypeBPlaf5", $obj->getCodeTypeBPlaf5());
    }

    /**
     * Tests the setCodeTypeBrut() method.
     *
     * @return void
     */
    public function testSetCodeTypeBrut() {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeTypeBrut("codeTypeBrut");
        $this->assertEquals("codeTypeBrut", $obj->getCodeTypeBrut());
    }

    /**
     * Tests the setCodeTypeBrut2() method.
     *
     * @return void
     */
    public function testSetCodeTypeBrut2() {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeTypeBrut2("codeTypeBrut2");
        $this->assertEquals("codeTypeBrut2", $obj->getCodeTypeBrut2());
    }

    /**
     * Tests the setCodeTypeBrut3() method.
     *
     * @return void
     */
    public function testSetCodeTypeBrut3() {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeTypeBrut3("codeTypeBrut3");
        $this->assertEquals("codeTypeBrut3", $obj->getCodeTypeBrut3());
    }

    /**
     * Tests the setCodeTypeBrut4() method.
     *
     * @return void
     */
    public function testSetCodeTypeBrut4() {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeTypeBrut4("codeTypeBrut4");
        $this->assertEquals("codeTypeBrut4", $obj->getCodeTypeBrut4());
    }

    /**
     * Tests the setCodeTypeBrut5() method.
     *
     * @return void
     */
    public function testSetCodeTypeBrut5() {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeTypeBrut5("codeTypeBrut5");
        $this->assertEquals("codeTypeBrut5", $obj->getCodeTypeBrut5());
    }

    /**
     * Tests the setCodeTypeSomme() method.
     *
     * @return void
     */
    public function testSetCodeTypeSomme() {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeTypeSomme("codeTypeSomme");
        $this->assertEquals("codeTypeSomme", $obj->getCodeTypeSomme());
    }

    /**
     * Tests the setCodeTypeSomme2() method.
     *
     * @return void
     */
    public function testSetCodeTypeSomme2() {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeTypeSomme2("codeTypeSomme2");
        $this->assertEquals("codeTypeSomme2", $obj->getCodeTypeSomme2());
    }

    /**
     * Tests the setCodeTypeSomme3() method.
     *
     * @return void
     */
    public function testSetCodeTypeSomme3() {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeTypeSomme3("codeTypeSomme3");
        $this->assertEquals("codeTypeSomme3", $obj->getCodeTypeSomme3());
    }

    /**
     * Tests the setCodeTypeSomme4() method.
     *
     * @return void
     */
    public function testSetCodeTypeSomme4() {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeTypeSomme4("codeTypeSomme4");
        $this->assertEquals("codeTypeSomme4", $obj->getCodeTypeSomme4());
    }

    /**
     * Tests the setCodeTypeSomme5() method.
     *
     * @return void
     */
    public function testSetCodeTypeSomme5() {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeTypeSomme5("codeTypeSomme5");
        $this->assertEquals("codeTypeSomme5", $obj->getCodeTypeSomme5());
    }

    /**
     * Tests the setCsgSpecif() method.
     *
     * @return void
     */
    public function testSetCsgSpecif() {

        $obj = new EmpDadsuCalcul();

        $obj->setCsgSpecif(10.092018);
        $this->assertEquals(10.092018, $obj->getCsgSpecif());
    }

    /**
     * Tests the setDureeTrav() method.
     *
     * @return void
     */
    public function testSetDureeTrav() {

        $obj = new EmpDadsuCalcul();

        $obj->setDureeTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeTrav());
    }

    /**
     * Tests the setExoHCode1() method.
     *
     * @return void
     */
    public function testSetExoHCode1() {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHCode1("exoHCode1");
        $this->assertEquals("exoHCode1", $obj->getExoHCode1());
    }

    /**
     * Tests the setExoHCode2() method.
     *
     * @return void
     */
    public function testSetExoHCode2() {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHCode2("exoHCode2");
        $this->assertEquals("exoHCode2", $obj->getExoHCode2());
    }

    /**
     * Tests the setExoHCode3() method.
     *
     * @return void
     */
    public function testSetExoHCode3() {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHCode3("exoHCode3");
        $this->assertEquals("exoHCode3", $obj->getExoHCode3());
    }

    /**
     * Tests the setExoHCode4() method.
     *
     * @return void
     */
    public function testSetExoHCode4() {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHCode4("exoHCode4");
        $this->assertEquals("exoHCode4", $obj->getExoHCode4());
    }

    /**
     * Tests the setExoHCode5() method.
     *
     * @return void
     */
    public function testSetExoHCode5() {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHCode5("exoHCode5");
        $this->assertEquals("exoHCode5", $obj->getExoHCode5());
    }

    /**
     * Tests the setExoHMnt1() method.
     *
     * @return void
     */
    public function testSetExoHMnt1() {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHMnt1(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHMnt1());
    }

    /**
     * Tests the setExoHMnt2() method.
     *
     * @return void
     */
    public function testSetExoHMnt2() {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHMnt2(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHMnt2());
    }

    /**
     * Tests the setExoHMnt3() method.
     *
     * @return void
     */
    public function testSetExoHMnt3() {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHMnt3(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHMnt3());
    }

    /**
     * Tests the setExoHMnt4() method.
     *
     * @return void
     */
    public function testSetExoHMnt4() {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHMnt4(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHMnt4());
    }

    /**
     * Tests the setExoHMnt5() method.
     *
     * @return void
     */
    public function testSetExoHMnt5() {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHMnt5(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHMnt5());
    }

    /**
     * Tests the setExoHMntDeducCotPat1() method.
     *
     * @return void
     */
    public function testSetExoHMntDeducCotPat1() {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHMntDeducCotPat1(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHMntDeducCotPat1());
    }

    /**
     * Tests the setExoHMntDeducCotPat2() method.
     *
     * @return void
     */
    public function testSetExoHMntDeducCotPat2() {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHMntDeducCotPat2(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHMntDeducCotPat2());
    }

    /**
     * Tests the setExoHMntDeducCotPat3() method.
     *
     * @return void
     */
    public function testSetExoHMntDeducCotPat3() {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHMntDeducCotPat3(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHMntDeducCotPat3());
    }

    /**
     * Tests the setExoHMntDeducCotPat4() method.
     *
     * @return void
     */
    public function testSetExoHMntDeducCotPat4() {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHMntDeducCotPat4(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHMntDeducCotPat4());
    }

    /**
     * Tests the setExoHMntDeducCotPat5() method.
     *
     * @return void
     */
    public function testSetExoHMntDeducCotPat5() {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHMntDeducCotPat5(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHMntDeducCotPat5());
    }

    /**
     * Tests the setExoHMntDeducCotPatTot() method.
     *
     * @return void
     */
    public function testSetExoHMntDeducCotPatTot() {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHMntDeducCotPatTot(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHMntDeducCotPatTot());
    }

    /**
     * Tests the setExoHMntReducCotSal1() method.
     *
     * @return void
     */
    public function testSetExoHMntReducCotSal1() {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHMntReducCotSal1(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHMntReducCotSal1());
    }

    /**
     * Tests the setExoHMntReducCotSal2() method.
     *
     * @return void
     */
    public function testSetExoHMntReducCotSal2() {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHMntReducCotSal2(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHMntReducCotSal2());
    }

    /**
     * Tests the setExoHMntReducCotSal3() method.
     *
     * @return void
     */
    public function testSetExoHMntReducCotSal3() {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHMntReducCotSal3(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHMntReducCotSal3());
    }

    /**
     * Tests the setExoHMntReducCotSal4() method.
     *
     * @return void
     */
    public function testSetExoHMntReducCotSal4() {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHMntReducCotSal4(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHMntReducCotSal4());
    }

    /**
     * Tests the setExoHMntReducCotSal5() method.
     *
     * @return void
     */
    public function testSetExoHMntReducCotSal5() {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHMntReducCotSal5(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHMntReducCotSal5());
    }

    /**
     * Tests the setExoHMntReducCotSalTot() method.
     *
     * @return void
     */
    public function testSetExoHMntReducCotSalTot() {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHMntReducCotSalTot(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHMntReducCotSalTot());
    }

    /**
     * Tests the setExoHNbHj1() method.
     *
     * @return void
     */
    public function testSetExoHNbHj1() {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHNbHj1(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHNbHj1());
    }

    /**
     * Tests the setExoHNbHj2() method.
     *
     * @return void
     */
    public function testSetExoHNbHj2() {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHNbHj2(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHNbHj2());
    }

    /**
     * Tests the setExoHNbHj3() method.
     *
     * @return void
     */
    public function testSetExoHNbHj3() {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHNbHj3(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHNbHj3());
    }

    /**
     * Tests the setExoHNbHj4() method.
     *
     * @return void
     */
    public function testSetExoHNbHj4() {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHNbHj4(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHNbHj4());
    }

    /**
     * Tests the setExoHNbHj5() method.
     *
     * @return void
     */
    public function testSetExoHNbHj5() {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHNbHj5(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHNbHj5());
    }

    /**
     * Tests the setFormaProBase() method.
     *
     * @return void
     */
    public function testSetFormaProBase() {

        $obj = new EmpDadsuCalcul();

        $obj->setFormaProBase(10.092018);
        $this->assertEquals(10.092018, $obj->getFormaProBase());
    }

    /**
     * Tests the setFormaProBaseCdd() method.
     *
     * @return void
     */
    public function testSetFormaProBaseCdd() {

        $obj = new EmpDadsuCalcul();

        $obj->setFormaProBaseCdd(10.092018);
        $this->assertEquals(10.092018, $obj->getFormaProBaseCdd());
    }

    /**
     * Tests the setIndCp() method.
     *
     * @return void
     */
    public function testSetIndCp() {

        $obj = new EmpDadsuCalcul();

        $obj->setIndCp(10.092018);
        $this->assertEquals(10.092018, $obj->getIndCp());
    }

    /**
     * Tests the setIndIntemp() method.
     *
     * @return void
     */
    public function testSetIndIntemp() {

        $obj = new EmpDadsuCalcul();

        $obj->setIndIntemp(10.092018);
        $this->assertEquals(10.092018, $obj->getIndIntemp());
    }

    /**
     * Tests the setMontantBPlaf() method.
     *
     * @return void
     */
    public function testSetMontantBPlaf() {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantBPlaf(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBPlaf());
    }

    /**
     * Tests the setMontantBPlaf2() method.
     *
     * @return void
     */
    public function testSetMontantBPlaf2() {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantBPlaf2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBPlaf2());
    }

    /**
     * Tests the setMontantBPlaf3() method.
     *
     * @return void
     */
    public function testSetMontantBPlaf3() {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantBPlaf3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBPlaf3());
    }

    /**
     * Tests the setMontantBPlaf4() method.
     *
     * @return void
     */
    public function testSetMontantBPlaf4() {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantBPlaf4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBPlaf4());
    }

    /**
     * Tests the setMontantBPlaf5() method.
     *
     * @return void
     */
    public function testSetMontantBPlaf5() {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantBPlaf5(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBPlaf5());
    }

    /**
     * Tests the setMontantBrut() method.
     *
     * @return void
     */
    public function testSetMontantBrut() {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBrut());
    }

    /**
     * Tests the setMontantBrut2() method.
     *
     * @return void
     */
    public function testSetMontantBrut2() {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantBrut2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBrut2());
    }

    /**
     * Tests the setMontantBrut3() method.
     *
     * @return void
     */
    public function testSetMontantBrut3() {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantBrut3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBrut3());
    }

    /**
     * Tests the setMontantBrut4() method.
     *
     * @return void
     */
    public function testSetMontantBrut4() {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantBrut4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBrut4());
    }

    /**
     * Tests the setMontantBrut5() method.
     *
     * @return void
     */
    public function testSetMontantBrut5() {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantBrut5(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBrut5());
    }

    /**
     * Tests the setMontantSommeIsolBrut() method.
     *
     * @return void
     */
    public function testSetMontantSommeIsolBrut() {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantSommeIsolBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolBrut());
    }

    /**
     * Tests the setMontantSommeIsolBrut2() method.
     *
     * @return void
     */
    public function testSetMontantSommeIsolBrut2() {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantSommeIsolBrut2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolBrut2());
    }

    /**
     * Tests the setMontantSommeIsolBrut3() method.
     *
     * @return void
     */
    public function testSetMontantSommeIsolBrut3() {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantSommeIsolBrut3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolBrut3());
    }

    /**
     * Tests the setMontantSommeIsolBrut4() method.
     *
     * @return void
     */
    public function testSetMontantSommeIsolBrut4() {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantSommeIsolBrut4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolBrut4());
    }

    /**
     * Tests the setMontantSommeIsolBrut5() method.
     *
     * @return void
     */
    public function testSetMontantSommeIsolBrut5() {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantSommeIsolBrut5(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolBrut5());
    }

    /**
     * Tests the setMontantSommeIsolPlaf() method.
     *
     * @return void
     */
    public function testSetMontantSommeIsolPlaf() {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantSommeIsolPlaf(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf());
    }

    /**
     * Tests the setMontantSommeIsolPlaf2() method.
     *
     * @return void
     */
    public function testSetMontantSommeIsolPlaf2() {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantSommeIsolPlaf2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf2());
    }

    /**
     * Tests the setMontantSommeIsolPlaf3() method.
     *
     * @return void
     */
    public function testSetMontantSommeIsolPlaf3() {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantSommeIsolPlaf3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf3());
    }

    /**
     * Tests the setMontantSommeIsolPlaf4() method.
     *
     * @return void
     */
    public function testSetMontantSommeIsolPlaf4() {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantSommeIsolPlaf4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf4());
    }

    /**
     * Tests the setMontantSommeIsolPlaf5() method.
     *
     * @return void
     */
    public function testSetMontantSommeIsolPlaf5() {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantSommeIsolPlaf5(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf5());
    }

    /**
     * Tests the setMtJRtt2007() method.
     *
     * @return void
     */
    public function testSetMtJRtt2007() {

        $obj = new EmpDadsuCalcul();

        $obj->setMtJRtt2007(10.092018);
        $this->assertEquals(10.092018, $obj->getMtJRtt2007());
    }

    /**
     * Tests the setNbJRtt2007() method.
     *
     * @return void
     */
    public function testSetNbJRtt2007() {

        $obj = new EmpDadsuCalcul();

        $obj->setNbJRtt2007(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJRtt2007());
    }

    /**
     * Tests the setNbPeriode() method.
     *
     * @return void
     */
    public function testSetNbPeriode() {

        $obj = new EmpDadsuCalcul();

        $obj->setNbPeriode(10.092018);
        $this->assertEquals(10.092018, $obj->getNbPeriode());
    }

    /**
     * Tests the setNbhChomPartiel() method.
     *
     * @return void
     */
    public function testSetNbhChomPartiel() {

        $obj = new EmpDadsuCalcul();

        $obj->setNbhChomPartiel(10.092018);
        $this->assertEquals(10.092018, $obj->getNbhChomPartiel());
    }

    /**
     * Tests the setNbhSemIrcantec() method.
     *
     * @return void
     */
    public function testSetNbhSemIrcantec() {

        $obj = new EmpDadsuCalcul();

        $obj->setNbhSemIrcantec(10.092018);
        $this->assertEquals(10.092018, $obj->getNbhSemIrcantec());
    }

    /**
     * Tests the setNumero() method.
     *
     * @return void
     */
    public function testSetNumero() {

        $obj = new EmpDadsuCalcul();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }

    /**
     * Tests the setNumeroOrdre() method.
     *
     * @return void
     */
    public function testSetNumeroOrdre() {

        $obj = new EmpDadsuCalcul();

        $obj->setNumeroOrdre(10);
        $this->assertEquals(10, $obj->getNumeroOrdre());
    }

    /**
     * Tests the setPlafIrcantec() method.
     *
     * @return void
     */
    public function testSetPlafIrcantec() {

        $obj = new EmpDadsuCalcul();

        $obj->setPlafIrcantec(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafIrcantec());
    }

    /**
     * Tests the setQualifUniteTemps() method.
     *
     * @return void
     */
    public function testSetQualifUniteTemps() {

        $obj = new EmpDadsuCalcul();

        $obj->setQualifUniteTemps("qualifUniteTemps");
        $this->assertEquals("qualifUniteTemps", $obj->getQualifUniteTemps());
    }

    /**
     * Tests the setSupplFam() method.
     *
     * @return void
     */
    public function testSetSupplFam() {

        $obj = new EmpDadsuCalcul();

        $obj->setSupplFam(10.092018);
        $this->assertEquals(10.092018, $obj->getSupplFam());
    }

    /**
     * Tests the setTaxeApprentissageBase() method.
     *
     * @return void
     */
    public function testSetTaxeApprentissageBase() {

        $obj = new EmpDadsuCalcul();

        $obj->setTaxeApprentissageBase(10.092018);
        $this->assertEquals(10.092018, $obj->getTaxeApprentissageBase());
    }

    /**
     * Tests the setTaxeSalaire() method.
     *
     * @return void
     */
    public function testSetTaxeSalaire() {

        $obj = new EmpDadsuCalcul();

        $obj->setTaxeSalaire(10.092018);
        $this->assertEquals(10.092018, $obj->getTaxeSalaire());
    }

    /**
     * Tests the setTrAIrcantec() method.
     *
     * @return void
     */
    public function testSetTrAIrcantec() {

        $obj = new EmpDadsuCalcul();

        $obj->setTrAIrcantec(10.092018);
        $this->assertEquals(10.092018, $obj->getTrAIrcantec());
    }

    /**
     * Tests the setTrBIrcantec() method.
     *
     * @return void
     */
    public function testSetTrBIrcantec() {

        $obj = new EmpDadsuCalcul();

        $obj->setTrBIrcantec(10.092018);
        $this->assertEquals(10.092018, $obj->getTrBIrcantec());
    }
}
