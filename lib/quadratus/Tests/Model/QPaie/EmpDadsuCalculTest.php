<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QPaie\EmpDadsuCalcul;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Emp dadsu calcul test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class EmpDadsuCalculTest extends AbstractTestCase {

    /**
     * Test setAnciennBtp()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetAnciennBtp(): void {

        // Set a Date/time mock.
        $anciennBtp = new DateTime("2018-09-10");

        $obj = new EmpDadsuCalcul();

        $obj->setAnciennBtp($anciennBtp);
        $this->assertSame($anciennBtp, $obj->getAnciennBtp());
    }

    /**
     * Test setAnneeSommeIsol()
     *
     * @return void
     */
    public function testSetAnneeSommeIsol(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setAnneeSommeIsol("anneeSommeIsol");
        $this->assertEquals("anneeSommeIsol", $obj->getAnneeSommeIsol());
    }

    /**
     * Test setAnneeSommeIsol2()
     *
     * @return void
     */
    public function testSetAnneeSommeIsol2(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setAnneeSommeIsol2("anneeSommeIsol2");
        $this->assertEquals("anneeSommeIsol2", $obj->getAnneeSommeIsol2());
    }

    /**
     * Test setAnneeSommeIsol3()
     *
     * @return void
     */
    public function testSetAnneeSommeIsol3(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setAnneeSommeIsol3("anneeSommeIsol3");
        $this->assertEquals("anneeSommeIsol3", $obj->getAnneeSommeIsol3());
    }

    /**
     * Test setAnneeSommeIsol4()
     *
     * @return void
     */
    public function testSetAnneeSommeIsol4(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setAnneeSommeIsol4("anneeSommeIsol4");
        $this->assertEquals("anneeSommeIsol4", $obj->getAnneeSommeIsol4());
    }

    /**
     * Test setAnneeSommeIsol5()
     *
     * @return void
     */
    public function testSetAnneeSommeIsol5(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setAnneeSommeIsol5("anneeSommeIsol5");
        $this->assertEquals("anneeSommeIsol5", $obj->getAnneeSommeIsol5());
    }

    /**
     * Test setBaseBruteCotCcpbtp()
     *
     * @return void
     */
    public function testSetBaseBruteCotCcpbtp(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setBaseBruteCotCcpbtp(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseBruteCotCcpbtp());
    }

    /**
     * Test setBaseBruteCotOppbtp()
     *
     * @return void
     */
    public function testSetBaseBruteCotOppbtp(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setBaseBruteCotOppbtp(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseBruteCotOppbtp());
    }

    /**
     * Test setBaseBruteCpbtp()
     *
     * @return void
     */
    public function testSetBaseBruteCpbtp(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setBaseBruteCpbtp(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseBruteCpbtp());
    }

    /**
     * Test setBenefAssedic()
     *
     * @return void
     */
    public function testSetBenefAssedic(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setBenefAssedic("benefAssedic");
        $this->assertEquals("benefAssedic", $obj->getBenefAssedic());
    }

    /**
     * Test setBrutIrcantec()
     *
     * @return void
     */
    public function testSetBrutIrcantec(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setBrutIrcantec(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutIrcantec());
    }

    /**
     * Test setBtpSalMoyen()
     *
     * @return void
     */
    public function testSetBtpSalMoyen(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setBtpSalMoyen(10.092018);
        $this->assertEquals(10.092018, $obj->getBtpSalMoyen());
    }

    /**
     * Test setCodeClassBtp()
     *
     * @return void
     */
    public function testSetCodeClassBtp(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeClassBtp("codeClassBtp");
        $this->assertEquals("codeClassBtp", $obj->getCodeClassBtp());
    }

    /**
     * Test setCodeDureeTrav()
     *
     * @return void
     */
    public function testSetCodeDureeTrav(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeDureeTrav("codeDureeTrav");
        $this->assertEquals("codeDureeTrav", $obj->getCodeDureeTrav());
    }

    /**
     * Test setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Test setCodeLibBPlaf()
     *
     * @return void
     */
    public function testSetCodeLibBPlaf(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeLibBPlaf("codeLibBPlaf");
        $this->assertEquals("codeLibBPlaf", $obj->getCodeLibBPlaf());
    }

    /**
     * Test setCodeLibBPlaf2()
     *
     * @return void
     */
    public function testSetCodeLibBPlaf2(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeLibBPlaf2("codeLibBPlaf2");
        $this->assertEquals("codeLibBPlaf2", $obj->getCodeLibBPlaf2());
    }

    /**
     * Test setCodeLibBPlaf3()
     *
     * @return void
     */
    public function testSetCodeLibBPlaf3(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeLibBPlaf3("codeLibBPlaf3");
        $this->assertEquals("codeLibBPlaf3", $obj->getCodeLibBPlaf3());
    }

    /**
     * Test setCodeLibBPlaf4()
     *
     * @return void
     */
    public function testSetCodeLibBPlaf4(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeLibBPlaf4("codeLibBPlaf4");
        $this->assertEquals("codeLibBPlaf4", $obj->getCodeLibBPlaf4());
    }

    /**
     * Test setCodeLibBPlaf5()
     *
     * @return void
     */
    public function testSetCodeLibBPlaf5(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeLibBPlaf5("codeLibBPlaf5");
        $this->assertEquals("codeLibBPlaf5", $obj->getCodeLibBPlaf5());
    }

    /**
     * Test setCodeLibBrut()
     *
     * @return void
     */
    public function testSetCodeLibBrut(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeLibBrut("codeLibBrut");
        $this->assertEquals("codeLibBrut", $obj->getCodeLibBrut());
    }

    /**
     * Test setCodeLibBrut2()
     *
     * @return void
     */
    public function testSetCodeLibBrut2(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeLibBrut2("codeLibBrut2");
        $this->assertEquals("codeLibBrut2", $obj->getCodeLibBrut2());
    }

    /**
     * Test setCodeLibBrut3()
     *
     * @return void
     */
    public function testSetCodeLibBrut3(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeLibBrut3("codeLibBrut3");
        $this->assertEquals("codeLibBrut3", $obj->getCodeLibBrut3());
    }

    /**
     * Test setCodeLibBrut4()
     *
     * @return void
     */
    public function testSetCodeLibBrut4(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeLibBrut4("codeLibBrut4");
        $this->assertEquals("codeLibBrut4", $obj->getCodeLibBrut4());
    }

    /**
     * Test setCodeLibBrut5()
     *
     * @return void
     */
    public function testSetCodeLibBrut5(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeLibBrut5("codeLibBrut5");
        $this->assertEquals("codeLibBrut5", $obj->getCodeLibBrut5());
    }

    /**
     * Test setCodeLibCsg()
     *
     * @return void
     */
    public function testSetCodeLibCsg(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeLibCsg("codeLibCsg");
        $this->assertEquals("codeLibCsg", $obj->getCodeLibCsg());
    }

    /**
     * Test setCodeLibIrc1()
     *
     * @return void
     */
    public function testSetCodeLibIrc1(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeLibIrc1("codeLibIrc1");
        $this->assertEquals("codeLibIrc1", $obj->getCodeLibIrc1());
    }

    /**
     * Test setCodeLibIrc2()
     *
     * @return void
     */
    public function testSetCodeLibIrc2(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeLibIrc2("codeLibIrc2");
        $this->assertEquals("codeLibIrc2", $obj->getCodeLibIrc2());
    }

    /**
     * Test setCodeLibIrc3()
     *
     * @return void
     */
    public function testSetCodeLibIrc3(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeLibIrc3("codeLibIrc3");
        $this->assertEquals("codeLibIrc3", $obj->getCodeLibIrc3());
    }

    /**
     * Test setCodeLibSomme()
     *
     * @return void
     */
    public function testSetCodeLibSomme(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeLibSomme("codeLibSomme");
        $this->assertEquals("codeLibSomme", $obj->getCodeLibSomme());
    }

    /**
     * Test setCodeLibSomme2()
     *
     * @return void
     */
    public function testSetCodeLibSomme2(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeLibSomme2("codeLibSomme2");
        $this->assertEquals("codeLibSomme2", $obj->getCodeLibSomme2());
    }

    /**
     * Test setCodeLibSomme3()
     *
     * @return void
     */
    public function testSetCodeLibSomme3(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeLibSomme3("codeLibSomme3");
        $this->assertEquals("codeLibSomme3", $obj->getCodeLibSomme3());
    }

    /**
     * Test setCodeLibSomme4()
     *
     * @return void
     */
    public function testSetCodeLibSomme4(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeLibSomme4("codeLibSomme4");
        $this->assertEquals("codeLibSomme4", $obj->getCodeLibSomme4());
    }

    /**
     * Test setCodeLibSomme5()
     *
     * @return void
     */
    public function testSetCodeLibSomme5(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeLibSomme5("codeLibSomme5");
        $this->assertEquals("codeLibSomme5", $obj->getCodeLibSomme5());
    }

    /**
     * Test setCodeMetierBtp()
     *
     * @return void
     */
    public function testSetCodeMetierBtp(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeMetierBtp("codeMetierBtp");
        $this->assertEquals("codeMetierBtp", $obj->getCodeMetierBtp());
    }

    /**
     * Test setCodeTypeBPlaf()
     *
     * @return void
     */
    public function testSetCodeTypeBPlaf(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeTypeBPlaf("codeTypeBPlaf");
        $this->assertEquals("codeTypeBPlaf", $obj->getCodeTypeBPlaf());
    }

    /**
     * Test setCodeTypeBPlaf2()
     *
     * @return void
     */
    public function testSetCodeTypeBPlaf2(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeTypeBPlaf2("codeTypeBPlaf2");
        $this->assertEquals("codeTypeBPlaf2", $obj->getCodeTypeBPlaf2());
    }

    /**
     * Test setCodeTypeBPlaf3()
     *
     * @return void
     */
    public function testSetCodeTypeBPlaf3(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeTypeBPlaf3("codeTypeBPlaf3");
        $this->assertEquals("codeTypeBPlaf3", $obj->getCodeTypeBPlaf3());
    }

    /**
     * Test setCodeTypeBPlaf4()
     *
     * @return void
     */
    public function testSetCodeTypeBPlaf4(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeTypeBPlaf4("codeTypeBPlaf4");
        $this->assertEquals("codeTypeBPlaf4", $obj->getCodeTypeBPlaf4());
    }

    /**
     * Test setCodeTypeBPlaf5()
     *
     * @return void
     */
    public function testSetCodeTypeBPlaf5(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeTypeBPlaf5("codeTypeBPlaf5");
        $this->assertEquals("codeTypeBPlaf5", $obj->getCodeTypeBPlaf5());
    }

    /**
     * Test setCodeTypeBrut()
     *
     * @return void
     */
    public function testSetCodeTypeBrut(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeTypeBrut("codeTypeBrut");
        $this->assertEquals("codeTypeBrut", $obj->getCodeTypeBrut());
    }

    /**
     * Test setCodeTypeBrut2()
     *
     * @return void
     */
    public function testSetCodeTypeBrut2(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeTypeBrut2("codeTypeBrut2");
        $this->assertEquals("codeTypeBrut2", $obj->getCodeTypeBrut2());
    }

    /**
     * Test setCodeTypeBrut3()
     *
     * @return void
     */
    public function testSetCodeTypeBrut3(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeTypeBrut3("codeTypeBrut3");
        $this->assertEquals("codeTypeBrut3", $obj->getCodeTypeBrut3());
    }

    /**
     * Test setCodeTypeBrut4()
     *
     * @return void
     */
    public function testSetCodeTypeBrut4(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeTypeBrut4("codeTypeBrut4");
        $this->assertEquals("codeTypeBrut4", $obj->getCodeTypeBrut4());
    }

    /**
     * Test setCodeTypeBrut5()
     *
     * @return void
     */
    public function testSetCodeTypeBrut5(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeTypeBrut5("codeTypeBrut5");
        $this->assertEquals("codeTypeBrut5", $obj->getCodeTypeBrut5());
    }

    /**
     * Test setCodeTypeSomme()
     *
     * @return void
     */
    public function testSetCodeTypeSomme(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeTypeSomme("codeTypeSomme");
        $this->assertEquals("codeTypeSomme", $obj->getCodeTypeSomme());
    }

    /**
     * Test setCodeTypeSomme2()
     *
     * @return void
     */
    public function testSetCodeTypeSomme2(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeTypeSomme2("codeTypeSomme2");
        $this->assertEquals("codeTypeSomme2", $obj->getCodeTypeSomme2());
    }

    /**
     * Test setCodeTypeSomme3()
     *
     * @return void
     */
    public function testSetCodeTypeSomme3(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeTypeSomme3("codeTypeSomme3");
        $this->assertEquals("codeTypeSomme3", $obj->getCodeTypeSomme3());
    }

    /**
     * Test setCodeTypeSomme4()
     *
     * @return void
     */
    public function testSetCodeTypeSomme4(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeTypeSomme4("codeTypeSomme4");
        $this->assertEquals("codeTypeSomme4", $obj->getCodeTypeSomme4());
    }

    /**
     * Test setCodeTypeSomme5()
     *
     * @return void
     */
    public function testSetCodeTypeSomme5(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCodeTypeSomme5("codeTypeSomme5");
        $this->assertEquals("codeTypeSomme5", $obj->getCodeTypeSomme5());
    }

    /**
     * Test setCsgSpecif()
     *
     * @return void
     */
    public function testSetCsgSpecif(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setCsgSpecif(10.092018);
        $this->assertEquals(10.092018, $obj->getCsgSpecif());
    }

    /**
     * Test setDureeTrav()
     *
     * @return void
     */
    public function testSetDureeTrav(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setDureeTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeTrav());
    }

    /**
     * Test setExoHCode1()
     *
     * @return void
     */
    public function testSetExoHCode1(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHCode1("exoHCode1");
        $this->assertEquals("exoHCode1", $obj->getExoHCode1());
    }

    /**
     * Test setExoHCode2()
     *
     * @return void
     */
    public function testSetExoHCode2(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHCode2("exoHCode2");
        $this->assertEquals("exoHCode2", $obj->getExoHCode2());
    }

    /**
     * Test setExoHCode3()
     *
     * @return void
     */
    public function testSetExoHCode3(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHCode3("exoHCode3");
        $this->assertEquals("exoHCode3", $obj->getExoHCode3());
    }

    /**
     * Test setExoHCode4()
     *
     * @return void
     */
    public function testSetExoHCode4(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHCode4("exoHCode4");
        $this->assertEquals("exoHCode4", $obj->getExoHCode4());
    }

    /**
     * Test setExoHCode5()
     *
     * @return void
     */
    public function testSetExoHCode5(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHCode5("exoHCode5");
        $this->assertEquals("exoHCode5", $obj->getExoHCode5());
    }

    /**
     * Test setExoHMnt1()
     *
     * @return void
     */
    public function testSetExoHMnt1(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHMnt1(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHMnt1());
    }

    /**
     * Test setExoHMnt2()
     *
     * @return void
     */
    public function testSetExoHMnt2(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHMnt2(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHMnt2());
    }

    /**
     * Test setExoHMnt3()
     *
     * @return void
     */
    public function testSetExoHMnt3(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHMnt3(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHMnt3());
    }

    /**
     * Test setExoHMnt4()
     *
     * @return void
     */
    public function testSetExoHMnt4(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHMnt4(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHMnt4());
    }

    /**
     * Test setExoHMnt5()
     *
     * @return void
     */
    public function testSetExoHMnt5(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHMnt5(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHMnt5());
    }

    /**
     * Test setExoHMntDeducCotPat1()
     *
     * @return void
     */
    public function testSetExoHMntDeducCotPat1(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHMntDeducCotPat1(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHMntDeducCotPat1());
    }

    /**
     * Test setExoHMntDeducCotPat2()
     *
     * @return void
     */
    public function testSetExoHMntDeducCotPat2(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHMntDeducCotPat2(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHMntDeducCotPat2());
    }

    /**
     * Test setExoHMntDeducCotPat3()
     *
     * @return void
     */
    public function testSetExoHMntDeducCotPat3(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHMntDeducCotPat3(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHMntDeducCotPat3());
    }

    /**
     * Test setExoHMntDeducCotPat4()
     *
     * @return void
     */
    public function testSetExoHMntDeducCotPat4(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHMntDeducCotPat4(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHMntDeducCotPat4());
    }

    /**
     * Test setExoHMntDeducCotPat5()
     *
     * @return void
     */
    public function testSetExoHMntDeducCotPat5(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHMntDeducCotPat5(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHMntDeducCotPat5());
    }

    /**
     * Test setExoHMntDeducCotPatTot()
     *
     * @return void
     */
    public function testSetExoHMntDeducCotPatTot(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHMntDeducCotPatTot(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHMntDeducCotPatTot());
    }

    /**
     * Test setExoHMntReducCotSal1()
     *
     * @return void
     */
    public function testSetExoHMntReducCotSal1(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHMntReducCotSal1(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHMntReducCotSal1());
    }

    /**
     * Test setExoHMntReducCotSal2()
     *
     * @return void
     */
    public function testSetExoHMntReducCotSal2(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHMntReducCotSal2(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHMntReducCotSal2());
    }

    /**
     * Test setExoHMntReducCotSal3()
     *
     * @return void
     */
    public function testSetExoHMntReducCotSal3(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHMntReducCotSal3(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHMntReducCotSal3());
    }

    /**
     * Test setExoHMntReducCotSal4()
     *
     * @return void
     */
    public function testSetExoHMntReducCotSal4(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHMntReducCotSal4(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHMntReducCotSal4());
    }

    /**
     * Test setExoHMntReducCotSal5()
     *
     * @return void
     */
    public function testSetExoHMntReducCotSal5(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHMntReducCotSal5(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHMntReducCotSal5());
    }

    /**
     * Test setExoHMntReducCotSalTot()
     *
     * @return void
     */
    public function testSetExoHMntReducCotSalTot(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHMntReducCotSalTot(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHMntReducCotSalTot());
    }

    /**
     * Test setExoHNbHj1()
     *
     * @return void
     */
    public function testSetExoHNbHj1(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHNbHj1(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHNbHj1());
    }

    /**
     * Test setExoHNbHj2()
     *
     * @return void
     */
    public function testSetExoHNbHj2(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHNbHj2(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHNbHj2());
    }

    /**
     * Test setExoHNbHj3()
     *
     * @return void
     */
    public function testSetExoHNbHj3(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHNbHj3(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHNbHj3());
    }

    /**
     * Test setExoHNbHj4()
     *
     * @return void
     */
    public function testSetExoHNbHj4(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHNbHj4(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHNbHj4());
    }

    /**
     * Test setExoHNbHj5()
     *
     * @return void
     */
    public function testSetExoHNbHj5(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setExoHNbHj5(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHNbHj5());
    }

    /**
     * Test setFormaProBase()
     *
     * @return void
     */
    public function testSetFormaProBase(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setFormaProBase(10.092018);
        $this->assertEquals(10.092018, $obj->getFormaProBase());
    }

    /**
     * Test setFormaProBaseCdd()
     *
     * @return void
     */
    public function testSetFormaProBaseCdd(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setFormaProBaseCdd(10.092018);
        $this->assertEquals(10.092018, $obj->getFormaProBaseCdd());
    }

    /**
     * Test setIndCp()
     *
     * @return void
     */
    public function testSetIndCp(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setIndCp(10.092018);
        $this->assertEquals(10.092018, $obj->getIndCp());
    }

    /**
     * Test setIndIntemp()
     *
     * @return void
     */
    public function testSetIndIntemp(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setIndIntemp(10.092018);
        $this->assertEquals(10.092018, $obj->getIndIntemp());
    }

    /**
     * Test setMontantBPlaf()
     *
     * @return void
     */
    public function testSetMontantBPlaf(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantBPlaf(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBPlaf());
    }

    /**
     * Test setMontantBPlaf2()
     *
     * @return void
     */
    public function testSetMontantBPlaf2(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantBPlaf2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBPlaf2());
    }

    /**
     * Test setMontantBPlaf3()
     *
     * @return void
     */
    public function testSetMontantBPlaf3(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantBPlaf3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBPlaf3());
    }

    /**
     * Test setMontantBPlaf4()
     *
     * @return void
     */
    public function testSetMontantBPlaf4(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantBPlaf4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBPlaf4());
    }

    /**
     * Test setMontantBPlaf5()
     *
     * @return void
     */
    public function testSetMontantBPlaf5(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantBPlaf5(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBPlaf5());
    }

    /**
     * Test setMontantBrut()
     *
     * @return void
     */
    public function testSetMontantBrut(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBrut());
    }

    /**
     * Test setMontantBrut2()
     *
     * @return void
     */
    public function testSetMontantBrut2(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantBrut2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBrut2());
    }

    /**
     * Test setMontantBrut3()
     *
     * @return void
     */
    public function testSetMontantBrut3(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantBrut3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBrut3());
    }

    /**
     * Test setMontantBrut4()
     *
     * @return void
     */
    public function testSetMontantBrut4(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantBrut4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBrut4());
    }

    /**
     * Test setMontantBrut5()
     *
     * @return void
     */
    public function testSetMontantBrut5(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantBrut5(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBrut5());
    }

    /**
     * Test setMontantSommeIsolBrut()
     *
     * @return void
     */
    public function testSetMontantSommeIsolBrut(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantSommeIsolBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolBrut());
    }

    /**
     * Test setMontantSommeIsolBrut2()
     *
     * @return void
     */
    public function testSetMontantSommeIsolBrut2(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantSommeIsolBrut2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolBrut2());
    }

    /**
     * Test setMontantSommeIsolBrut3()
     *
     * @return void
     */
    public function testSetMontantSommeIsolBrut3(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantSommeIsolBrut3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolBrut3());
    }

    /**
     * Test setMontantSommeIsolBrut4()
     *
     * @return void
     */
    public function testSetMontantSommeIsolBrut4(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantSommeIsolBrut4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolBrut4());
    }

    /**
     * Test setMontantSommeIsolBrut5()
     *
     * @return void
     */
    public function testSetMontantSommeIsolBrut5(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantSommeIsolBrut5(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolBrut5());
    }

    /**
     * Test setMontantSommeIsolPlaf()
     *
     * @return void
     */
    public function testSetMontantSommeIsolPlaf(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantSommeIsolPlaf(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf());
    }

    /**
     * Test setMontantSommeIsolPlaf2()
     *
     * @return void
     */
    public function testSetMontantSommeIsolPlaf2(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantSommeIsolPlaf2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf2());
    }

    /**
     * Test setMontantSommeIsolPlaf3()
     *
     * @return void
     */
    public function testSetMontantSommeIsolPlaf3(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantSommeIsolPlaf3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf3());
    }

    /**
     * Test setMontantSommeIsolPlaf4()
     *
     * @return void
     */
    public function testSetMontantSommeIsolPlaf4(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantSommeIsolPlaf4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf4());
    }

    /**
     * Test setMontantSommeIsolPlaf5()
     *
     * @return void
     */
    public function testSetMontantSommeIsolPlaf5(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setMontantSommeIsolPlaf5(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSommeIsolPlaf5());
    }

    /**
     * Test setMtJRtt2007()
     *
     * @return void
     */
    public function testSetMtJRtt2007(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setMtJRtt2007(10.092018);
        $this->assertEquals(10.092018, $obj->getMtJRtt2007());
    }

    /**
     * Test setNbJRtt2007()
     *
     * @return void
     */
    public function testSetNbJRtt2007(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setNbJRtt2007(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJRtt2007());
    }

    /**
     * Test setNbPeriode()
     *
     * @return void
     */
    public function testSetNbPeriode(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setNbPeriode(10.092018);
        $this->assertEquals(10.092018, $obj->getNbPeriode());
    }

    /**
     * Test setNbhChomPartiel()
     *
     * @return void
     */
    public function testSetNbhChomPartiel(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setNbhChomPartiel(10.092018);
        $this->assertEquals(10.092018, $obj->getNbhChomPartiel());
    }

    /**
     * Test setNbhSemIrcantec()
     *
     * @return void
     */
    public function testSetNbhSemIrcantec(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setNbhSemIrcantec(10.092018);
        $this->assertEquals(10.092018, $obj->getNbhSemIrcantec());
    }

    /**
     * Test setNumero()
     *
     * @return void
     */
    public function testSetNumero(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }

    /**
     * Test setNumeroOrdre()
     *
     * @return void
     */
    public function testSetNumeroOrdre(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setNumeroOrdre(10);
        $this->assertEquals(10, $obj->getNumeroOrdre());
    }

    /**
     * Test setPlafIrcantec()
     *
     * @return void
     */
    public function testSetPlafIrcantec(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setPlafIrcantec(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafIrcantec());
    }

    /**
     * Test setQualifUniteTemps()
     *
     * @return void
     */
    public function testSetQualifUniteTemps(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setQualifUniteTemps("qualifUniteTemps");
        $this->assertEquals("qualifUniteTemps", $obj->getQualifUniteTemps());
    }

    /**
     * Test setSupplFam()
     *
     * @return void
     */
    public function testSetSupplFam(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setSupplFam(10.092018);
        $this->assertEquals(10.092018, $obj->getSupplFam());
    }

    /**
     * Test setTaxeApprentissageBase()
     *
     * @return void
     */
    public function testSetTaxeApprentissageBase(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setTaxeApprentissageBase(10.092018);
        $this->assertEquals(10.092018, $obj->getTaxeApprentissageBase());
    }

    /**
     * Test setTaxeSalaire()
     *
     * @return void
     */
    public function testSetTaxeSalaire(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setTaxeSalaire(10.092018);
        $this->assertEquals(10.092018, $obj->getTaxeSalaire());
    }

    /**
     * Test setTrAIrcantec()
     *
     * @return void
     */
    public function testSetTrAIrcantec(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setTrAIrcantec(10.092018);
        $this->assertEquals(10.092018, $obj->getTrAIrcantec());
    }

    /**
     * Test setTrBIrcantec()
     *
     * @return void
     */
    public function testSetTrBIrcantec(): void {

        $obj = new EmpDadsuCalcul();

        $obj->setTrBIrcantec(10.092018);
        $this->assertEquals(10.092018, $obj->getTrBIrcantec());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
}
