<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QCompta\DecTva3514;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Dec tva3514 test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class DecTva3514Test extends AbstractTestCase {

    /**
     * Test set02BaseHt196()
     *
     * @return void
     */
    public function testSet02BaseHt196(): void {

        $obj = new DecTva3514();

        $obj->set02BaseHt196(10.092018);
        $this->assertEquals(10.092018, $obj->get02BaseHt196());
    }

    /**
     * Test set02TaxeDue196()
     *
     * @return void
     */
    public function testSet02TaxeDue196(): void {

        $obj = new DecTva3514();

        $obj->set02TaxeDue196(10.092018);
        $this->assertEquals(10.092018, $obj->get02TaxeDue196());
    }

    /**
     * Test set03BaseHt55()
     *
     * @return void
     */
    public function testSet03BaseHt55(): void {

        $obj = new DecTva3514();

        $obj->set03BaseHt55(10.092018);
        $this->assertEquals(10.092018, $obj->get03BaseHt55());
    }

    /**
     * Test set03TaxeDue55()
     *
     * @return void
     */
    public function testSet03TaxeDue55(): void {

        $obj = new DecTva3514();

        $obj->set03TaxeDue55(10.092018);
        $this->assertEquals(10.092018, $obj->get03TaxeDue55());
    }

    /**
     * Test set04BaseHt85()
     *
     * @return void
     */
    public function testSet04BaseHt85(): void {

        $obj = new DecTva3514();

        $obj->set04BaseHt85(10.092018);
        $this->assertEquals(10.092018, $obj->get04BaseHt85());
    }

    /**
     * Test set04TaxeDue85()
     *
     * @return void
     */
    public function testSet04TaxeDue85(): void {

        $obj = new DecTva3514();

        $obj->set04TaxeDue85(10.092018);
        $this->assertEquals(10.092018, $obj->get04TaxeDue85());
    }

    /**
     * Test set05BaseHt21()
     *
     * @return void
     */
    public function testSet05BaseHt21(): void {

        $obj = new DecTva3514();

        $obj->set05BaseHt21(10.092018);
        $this->assertEquals(10.092018, $obj->get05BaseHt21());
    }

    /**
     * Test set05TaxeDue21()
     *
     * @return void
     */
    public function testSet05TaxeDue21(): void {

        $obj = new DecTva3514();

        $obj->set05TaxeDue21(10.092018);
        $this->assertEquals(10.092018, $obj->get05TaxeDue21());
    }

    /**
     * Test set06BaseHtAncTaux()
     *
     * @return void
     */
    public function testSet06BaseHtAncTaux(): void {

        $obj = new DecTva3514();

        $obj->set06BaseHtAncTaux(10.092018);
        $this->assertEquals(10.092018, $obj->get06BaseHtAncTaux());
    }

    /**
     * Test set06TaxeDueAncTaux()
     *
     * @return void
     */
    public function testSet06TaxeDueAncTaux(): void {

        $obj = new DecTva3514();

        $obj->set06TaxeDueAncTaux(10.092018);
        $this->assertEquals(10.092018, $obj->get06TaxeDueAncTaux());
    }

    /**
     * Test set07BaseHtTauxPart()
     *
     * @return void
     */
    public function testSet07BaseHtTauxPart(): void {

        $obj = new DecTva3514();

        $obj->set07BaseHtTauxPart(10.092018);
        $this->assertEquals(10.092018, $obj->get07BaseHtTauxPart());
    }

    /**
     * Test set07TaxeDueTauxPart()
     *
     * @return void
     */
    public function testSet07TaxeDueTauxPart(): void {

        $obj = new DecTva3514();

        $obj->set07TaxeDueTauxPart(10.092018);
        $this->assertEquals(10.092018, $obj->get07TaxeDueTauxPart());
    }

    /**
     * Test set08BaseHttvAaReverser()
     *
     * @return void
     */
    public function testSet08BaseHttvAaReverser(): void {

        $obj = new DecTva3514();

        $obj->set08BaseHttvAaReverser(10.092018);
        $this->assertEquals(10.092018, $obj->get08BaseHttvAaReverser());
    }

    /**
     * Test set08TaxeDueTvAaReverser()
     *
     * @return void
     */
    public function testSet08TaxeDueTvAaReverser(): void {

        $obj = new DecTva3514();

        $obj->set08TaxeDueTvAaReverser(10.092018);
        $this->assertEquals(10.092018, $obj->get08TaxeDueTvAaReverser());
    }

    /**
     * Test set09TotalTvaBrute()
     *
     * @return void
     */
    public function testSet09TotalTvaBrute(): void {

        $obj = new DecTva3514();

        $obj->set09TotalTvaBrute(10.092018);
        $this->assertEquals(10.092018, $obj->get09TotalTvaBrute());
    }

    /**
     * Test set10BiensImmos()
     *
     * @return void
     */
    public function testSet10BiensImmos(): void {

        $obj = new DecTva3514();

        $obj->set10BiensImmos(10.092018);
        $this->assertEquals(10.092018, $obj->get10BiensImmos());
    }

    /**
     * Test set11AutresBiens()
     *
     * @return void
     */
    public function testSet11AutresBiens(): void {

        $obj = new DecTva3514();

        $obj->set11AutresBiens(10.092018);
        $this->assertEquals(10.092018, $obj->get11AutresBiens());
    }

    /**
     * Test set12Omission()
     *
     * @return void
     */
    public function testSet12Omission(): void {

        $obj = new DecTva3514();

        $obj->set12Omission(10.092018);
        $this->assertEquals(10.092018, $obj->get12Omission());
    }

    /**
     * Test set13TotalTvaDeduc()
     *
     * @return void
     */
    public function testSet13TotalTvaDeduc(): void {

        $obj = new DecTva3514();

        $obj->set13TotalTvaDeduc(10.092018);
        $this->assertEquals(10.092018, $obj->get13TotalTvaDeduc());
    }

    /**
     * Test set14A()
     *
     * @return void
     */
    public function testSet14A(): void {

        $obj = new DecTva3514();

        $obj->set14A(10.092018);
        $this->assertEquals(10.092018, $obj->get14A());
    }

    /**
     * Test set15B()
     *
     * @return void
     */
    public function testSet15B(): void {

        $obj = new DecTva3514();

        $obj->set15B(10.092018);
        $this->assertEquals(10.092018, $obj->get15B());
    }

    /**
     * Test set16RemboursTva()
     *
     * @return void
     */
    public function testSet16RemboursTva(): void {

        $obj = new DecTva3514();

        $obj->set16RemboursTva(10.092018);
        $this->assertEquals(10.092018, $obj->get16RemboursTva());
    }

    /**
     * Test set18CreditTvaca12()
     *
     * @return void
     */
    public function testSet18CreditTvaca12(): void {

        $obj = new DecTva3514();

        $obj->set18CreditTvaca12(10.092018);
        $this->assertEquals(10.092018, $obj->get18CreditTvaca12());
    }

    /**
     * Test set1MttAugmentation()
     *
     * @return void
     */
    public function testSet1MttAugmentation(): void {

        $obj = new DecTva3514();

        $obj->set1MttAugmentation(10.092018);
        $this->assertEquals(10.092018, $obj->get1MttAugmentation());
    }

    /**
     * Test set20AcompteTa1()
     *
     * @return void
     */
    public function testSet20AcompteTa1(): void {

        $obj = new DecTva3514();

        $obj->set20AcompteTa1(10.092018);
        $this->assertEquals(10.092018, $obj->get20AcompteTa1());
    }

    /**
     * Test set20AcompteTa2()
     *
     * @return void
     */
    public function testSet20AcompteTa2(): void {

        $obj = new DecTva3514();

        $obj->set20AcompteTa2(10.092018);
        $this->assertEquals(10.092018, $obj->get20AcompteTa2());
    }

    /**
     * Test set21AcompteTot1()
     *
     * @return void
     */
    public function testSet21AcompteTot1(): void {

        $obj = new DecTva3514();

        $obj->set21AcompteTot1(10.092018);
        $this->assertEquals(10.092018, $obj->get21AcompteTot1());
    }

    /**
     * Test set21AcompteTot2()
     *
     * @return void
     */
    public function testSet21AcompteTot2(): void {

        $obj = new DecTva3514();

        $obj->set21AcompteTot2(10.092018);
        $this->assertEquals(10.092018, $obj->get21AcompteTot2());
    }

    /**
     * Test set2BBaseHt7()
     *
     * @return void
     */
    public function testSet2BBaseHt7(): void {

        $obj = new DecTva3514();

        $obj->set2BBaseHt7(10.092018);
        $this->assertEquals(10.092018, $obj->get2BBaseHt7());
    }

    /**
     * Test set2BTaxeDue7()
     *
     * @return void
     */
    public function testSet2BTaxeDue7(): void {

        $obj = new DecTva3514();

        $obj->set2BTaxeDue7(10.092018);
        $this->assertEquals(10.092018, $obj->get2BTaxeDue7());
    }

    /**
     * Test set2MttCreditPrec()
     *
     * @return void
     */
    public function testSet2MttCreditPrec(): void {

        $obj = new DecTva3514();

        $obj->set2MttCreditPrec(10.092018);
        $this->assertEquals(10.092018, $obj->get2MttCreditPrec());
    }

    /**
     * Test set2MttDiminution()
     *
     * @return void
     */
    public function testSet2MttDiminution(): void {

        $obj = new DecTva3514();

        $obj->set2MttDiminution(10.092018);
        $this->assertEquals(10.092018, $obj->get2MttDiminution());
    }

    /**
     * Test set3MttDiminution()
     *
     * @return void
     */
    public function testSet3MttDiminution(): void {

        $obj = new DecTva3514();

        $obj->set3MttDiminution(10.092018);
        $this->assertEquals(10.092018, $obj->get3MttDiminution());
    }

    /**
     * Test set3Suspension()
     *
     * @return void
     */
    public function testSet3Suspension(): void {

        $obj = new DecTva3514();

        $obj->set3Suspension(10);
        $this->assertEquals(10, $obj->get3Suspension());
    }

    /**
     * Test set4HasDiminution()
     *
     * @return void
     */
    public function testSet4HasDiminution(): void {

        $obj = new DecTva3514();

        $obj->set4HasDiminution(true);
        $this->assertTrue($obj->get4HasDiminution());
    }

    /**
     * Test set4MttDiminution()
     *
     * @return void
     */
    public function testSet4MttDiminution(): void {

        $obj = new DecTva3514();

        $obj->set4MttDiminution(10.092018);
        $this->assertEquals(10.092018, $obj->get4MttDiminution());
    }

    /**
     * Test setAcompteDu()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetAcompteDu(): void {

        // Set a Date/time mock.
        $acompteDu = new DateTime("2018-09-10");

        $obj = new DecTva3514();

        $obj->setAcompteDu($acompteDu);
        $this->assertSame($acompteDu, $obj->getAcompteDu());
    }

    /**
     * Test setDateDec()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateDec(): void {

        // Set a Date/time mock.
        $dateDec = new DateTime("2018-09-10");

        $obj = new DecTva3514();

        $obj->setDateDec($dateDec);
        $this->assertSame($dateDec, $obj->getDateDec());
    }

    /**
     * Test setDateLimiteDec()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateLimiteDec(): void {

        // Set a Date/time mock.
        $dateLimiteDec = new DateTime("2018-09-10");

        $obj = new DecTva3514();

        $obj->setDateLimiteDec($dateLimiteDec);
        $this->assertSame($dateLimiteDec, $obj->getDateLimiteDec());
    }

    /**
     * Test setDetCodeTa()
     *
     * @return void
     */
    public function testSetDetCodeTa(): void {

        $obj = new DecTva3514();

        $obj->setDetCodeTa("detCodeTa");
        $this->assertEquals("detCodeTa", $obj->getDetCodeTa());
    }

    /**
     * Test setDetTa1()
     *
     * @return void
     */
    public function testSetDetTa1(): void {

        $obj = new DecTva3514();

        $obj->setDetTa1("detTa1");
        $this->assertEquals("detTa1", $obj->getDetTa1());
    }

    /**
     * Test setDetTa2()
     *
     * @return void
     */
    public function testSetDetTa2(): void {

        $obj = new DecTva3514();

        $obj->setDetTa2("detTa2");
        $this->assertEquals("detTa2", $obj->getDetTa2());
    }

    /**
     * Test setDetTa3()
     *
     * @return void
     */
    public function testSetDetTa3(): void {

        $obj = new DecTva3514();

        $obj->setDetTa3("detTa3");
        $this->assertEquals("detTa3", $obj->getDetTa3());
    }

    /**
     * Test setDetTa4()
     *
     * @return void
     */
    public function testSetDetTa4(): void {

        $obj = new DecTva3514();

        $obj->setDetTa4("detTa4");
        $this->assertEquals("detTa4", $obj->getDetTa4());
    }

    /**
     * Test setExigibleLe()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetExigibleLe(): void {

        // Set a Date/time mock.
        $exigibleLe = new DateTime("2018-09-10");

        $obj = new DecTva3514();

        $obj->setExigibleLe($exigibleLe);
        $this->assertSame($exigibleLe, $obj->getExigibleLe());
    }

    /**
     * Test setMttAPayer()
     *
     * @return void
     */
    public function testSetMttAPayer(): void {

        $obj = new DecTva3514();

        $obj->setMttAPayer(10.092018);
        $this->assertEquals(10.092018, $obj->getMttAPayer());
    }

    /**
     * Test setMttDetTa1()
     *
     * @return void
     */
    public function testSetMttDetTa1(): void {

        $obj = new DecTva3514();

        $obj->setMttDetTa1(10.092018);
        $this->assertEquals(10.092018, $obj->getMttDetTa1());
    }

    /**
     * Test setMttDetTa2()
     *
     * @return void
     */
    public function testSetMttDetTa2(): void {

        $obj = new DecTva3514();

        $obj->setMttDetTa2(10.092018);
        $this->assertEquals(10.092018, $obj->getMttDetTa2());
    }

    /**
     * Test setMttDetTa3()
     *
     * @return void
     */
    public function testSetMttDetTa3(): void {

        $obj = new DecTva3514();

        $obj->setMttDetTa3(10.092018);
        $this->assertEquals(10.092018, $obj->getMttDetTa3());
    }

    /**
     * Test setMttDetTa4()
     *
     * @return void
     */
    public function testSetMttDetTa4(): void {

        $obj = new DecTva3514();

        $obj->setMttDetTa4(10.092018);
        $this->assertEquals(10.092018, $obj->getMttDetTa4());
    }

    /**
     * Test setMttDontTaxesAssim()
     *
     * @return void
     */
    public function testSetMttDontTaxesAssim(): void {

        $obj = new DecTva3514();

        $obj->setMttDontTaxesAssim(10.092018);
        $this->assertEquals(10.092018, $obj->getMttDontTaxesAssim());
    }

    /**
     * Test setMttDontTva()
     *
     * @return void
     */
    public function testSetMttDontTva(): void {

        $obj = new DecTva3514();

        $obj->setMttDontTva(10.092018);
        $this->assertEquals(10.092018, $obj->getMttDontTva());
    }

    /**
     * Test setPeriode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriode(): void {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new DecTva3514();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Test setz0151()
     *
     * @return void
     */
    public function testSetz0151(): void {

        $obj = new DecTva3514();

        $obj->setz0151(10.092018);
        $this->assertEquals(10.092018, $obj->getz0151());
    }

    /**
     * Test setz0207()
     *
     * @return void
     */
    public function testSetz0207(): void {

        $obj = new DecTva3514();

        $obj->setz0207(10.092018);
        $this->assertEquals(10.092018, $obj->getz0207());
    }

    /**
     * Test setzHa()
     *
     * @return void
     */
    public function testSetzHa(): void {

        $obj = new DecTva3514();

        $obj->setzHa(10.092018);
        $this->assertEquals(10.092018, $obj->getzHa());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DecTva3514();

        $this->assertNull($obj->get02BaseHt196());
        $this->assertNull($obj->get02TaxeDue196());
        $this->assertNull($obj->get03BaseHt55());
        $this->assertNull($obj->get03TaxeDue55());
        $this->assertNull($obj->get04BaseHt85());
        $this->assertNull($obj->get04TaxeDue85());
        $this->assertNull($obj->get05BaseHt21());
        $this->assertNull($obj->get05TaxeDue21());
        $this->assertNull($obj->get06BaseHtAncTaux());
        $this->assertNull($obj->get06TaxeDueAncTaux());
        $this->assertNull($obj->get07BaseHtTauxPart());
        $this->assertNull($obj->get07TaxeDueTauxPart());
        $this->assertNull($obj->get08BaseHttvAaReverser());
        $this->assertNull($obj->get08TaxeDueTvAaReverser());
        $this->assertNull($obj->get09TotalTvaBrute());
        $this->assertNull($obj->get10BiensImmos());
        $this->assertNull($obj->get11AutresBiens());
        $this->assertNull($obj->get12Omission());
        $this->assertNull($obj->get13TotalTvaDeduc());
        $this->assertNull($obj->get14A());
        $this->assertNull($obj->get15B());
        $this->assertNull($obj->get16RemboursTva());
        $this->assertNull($obj->get18CreditTvaca12());
        $this->assertNull($obj->get1MttAugmentation());
        $this->assertNull($obj->get20AcompteTa1());
        $this->assertNull($obj->get20AcompteTa2());
        $this->assertNull($obj->get21AcompteTot1());
        $this->assertNull($obj->get21AcompteTot2());
        $this->assertNull($obj->get2BBaseHt7());
        $this->assertNull($obj->get2BTaxeDue7());
        $this->assertNull($obj->get2MttCreditPrec());
        $this->assertNull($obj->get2MttDiminution());
        $this->assertNull($obj->get3MttDiminution());
        $this->assertNull($obj->get3Suspension());
        $this->assertNull($obj->get4HasDiminution());
        $this->assertNull($obj->get4MttDiminution());
        $this->assertNull($obj->getAcompteDu());
        $this->assertNull($obj->getDateDec());
        $this->assertNull($obj->getDateLimiteDec());
        $this->assertNull($obj->getDetCodeTa());
        $this->assertNull($obj->getDetTa1());
        $this->assertNull($obj->getDetTa2());
        $this->assertNull($obj->getDetTa3());
        $this->assertNull($obj->getDetTa4());
        $this->assertNull($obj->getExigibleLe());
        $this->assertNull($obj->getMttAPayer());
        $this->assertNull($obj->getMttDetTa1());
        $this->assertNull($obj->getMttDetTa2());
        $this->assertNull($obj->getMttDetTa3());
        $this->assertNull($obj->getMttDetTa4());
        $this->assertNull($obj->getMttDontTva());
        $this->assertNull($obj->getMttDontTaxesAssim());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getz0151());
        $this->assertNull($obj->getz0207());
        $this->assertNull($obj->getzHa());
    }
}
