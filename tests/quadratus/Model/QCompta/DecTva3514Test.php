<?php

/*
 * This file is part of the core-library-package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QCompta\DecTva3514;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Dec tva3514 test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class DecTva3514Test extends AbstractTestCase {

    /**
     * Tests the set02BaseHt196() method.
     *
     * @return void
     */
    public function testSet02BaseHt196(): void {

        $obj = new DecTva3514();

        $obj->set02BaseHt196(10.092018);
        $this->assertEquals(10.092018, $obj->get02BaseHt196());
    }

    /**
     * Tests the set02TaxeDue196() method.
     *
     * @return void
     */
    public function testSet02TaxeDue196(): void {

        $obj = new DecTva3514();

        $obj->set02TaxeDue196(10.092018);
        $this->assertEquals(10.092018, $obj->get02TaxeDue196());
    }

    /**
     * Tests the set03BaseHt55() method.
     *
     * @return void
     */
    public function testSet03BaseHt55(): void {

        $obj = new DecTva3514();

        $obj->set03BaseHt55(10.092018);
        $this->assertEquals(10.092018, $obj->get03BaseHt55());
    }

    /**
     * Tests the set03TaxeDue55() method.
     *
     * @return void
     */
    public function testSet03TaxeDue55(): void {

        $obj = new DecTva3514();

        $obj->set03TaxeDue55(10.092018);
        $this->assertEquals(10.092018, $obj->get03TaxeDue55());
    }

    /**
     * Tests the set04BaseHt85() method.
     *
     * @return void
     */
    public function testSet04BaseHt85(): void {

        $obj = new DecTva3514();

        $obj->set04BaseHt85(10.092018);
        $this->assertEquals(10.092018, $obj->get04BaseHt85());
    }

    /**
     * Tests the set04TaxeDue85() method.
     *
     * @return void
     */
    public function testSet04TaxeDue85(): void {

        $obj = new DecTva3514();

        $obj->set04TaxeDue85(10.092018);
        $this->assertEquals(10.092018, $obj->get04TaxeDue85());
    }

    /**
     * Tests the set05BaseHt21() method.
     *
     * @return void
     */
    public function testSet05BaseHt21(): void {

        $obj = new DecTva3514();

        $obj->set05BaseHt21(10.092018);
        $this->assertEquals(10.092018, $obj->get05BaseHt21());
    }

    /**
     * Tests the set05TaxeDue21() method.
     *
     * @return void
     */
    public function testSet05TaxeDue21(): void {

        $obj = new DecTva3514();

        $obj->set05TaxeDue21(10.092018);
        $this->assertEquals(10.092018, $obj->get05TaxeDue21());
    }

    /**
     * Tests the set06BaseHtAncTaux() method.
     *
     * @return void
     */
    public function testSet06BaseHtAncTaux(): void {

        $obj = new DecTva3514();

        $obj->set06BaseHtAncTaux(10.092018);
        $this->assertEquals(10.092018, $obj->get06BaseHtAncTaux());
    }

    /**
     * Tests the set06TaxeDueAncTaux() method.
     *
     * @return void
     */
    public function testSet06TaxeDueAncTaux(): void {

        $obj = new DecTva3514();

        $obj->set06TaxeDueAncTaux(10.092018);
        $this->assertEquals(10.092018, $obj->get06TaxeDueAncTaux());
    }

    /**
     * Tests the set07BaseHtTauxPart() method.
     *
     * @return void
     */
    public function testSet07BaseHtTauxPart(): void {

        $obj = new DecTva3514();

        $obj->set07BaseHtTauxPart(10.092018);
        $this->assertEquals(10.092018, $obj->get07BaseHtTauxPart());
    }

    /**
     * Tests the set07TaxeDueTauxPart() method.
     *
     * @return void
     */
    public function testSet07TaxeDueTauxPart(): void {

        $obj = new DecTva3514();

        $obj->set07TaxeDueTauxPart(10.092018);
        $this->assertEquals(10.092018, $obj->get07TaxeDueTauxPart());
    }

    /**
     * Tests the set08BaseHttvAaReverser() method.
     *
     * @return void
     */
    public function testSet08BaseHttvAaReverser(): void {

        $obj = new DecTva3514();

        $obj->set08BaseHttvAaReverser(10.092018);
        $this->assertEquals(10.092018, $obj->get08BaseHttvAaReverser());
    }

    /**
     * Tests the set08TaxeDueTvAaReverser() method.
     *
     * @return void
     */
    public function testSet08TaxeDueTvAaReverser(): void {

        $obj = new DecTva3514();

        $obj->set08TaxeDueTvAaReverser(10.092018);
        $this->assertEquals(10.092018, $obj->get08TaxeDueTvAaReverser());
    }

    /**
     * Tests the set09TotalTvaBrute() method.
     *
     * @return void
     */
    public function testSet09TotalTvaBrute(): void {

        $obj = new DecTva3514();

        $obj->set09TotalTvaBrute(10.092018);
        $this->assertEquals(10.092018, $obj->get09TotalTvaBrute());
    }

    /**
     * Tests the set10BiensImmos() method.
     *
     * @return void
     */
    public function testSet10BiensImmos(): void {

        $obj = new DecTva3514();

        $obj->set10BiensImmos(10.092018);
        $this->assertEquals(10.092018, $obj->get10BiensImmos());
    }

    /**
     * Tests the set11AutresBiens() method.
     *
     * @return void
     */
    public function testSet11AutresBiens(): void {

        $obj = new DecTva3514();

        $obj->set11AutresBiens(10.092018);
        $this->assertEquals(10.092018, $obj->get11AutresBiens());
    }

    /**
     * Tests the set12Omission() method.
     *
     * @return void
     */
    public function testSet12Omission(): void {

        $obj = new DecTva3514();

        $obj->set12Omission(10.092018);
        $this->assertEquals(10.092018, $obj->get12Omission());
    }

    /**
     * Tests the set13TotalTvaDeduc() method.
     *
     * @return void
     */
    public function testSet13TotalTvaDeduc(): void {

        $obj = new DecTva3514();

        $obj->set13TotalTvaDeduc(10.092018);
        $this->assertEquals(10.092018, $obj->get13TotalTvaDeduc());
    }

    /**
     * Tests the set14A() method.
     *
     * @return void
     */
    public function testSet14A(): void {

        $obj = new DecTva3514();

        $obj->set14A(10.092018);
        $this->assertEquals(10.092018, $obj->get14A());
    }

    /**
     * Tests the set15B() method.
     *
     * @return void
     */
    public function testSet15B(): void {

        $obj = new DecTva3514();

        $obj->set15B(10.092018);
        $this->assertEquals(10.092018, $obj->get15B());
    }

    /**
     * Tests the set16RemboursTva() method.
     *
     * @return void
     */
    public function testSet16RemboursTva(): void {

        $obj = new DecTva3514();

        $obj->set16RemboursTva(10.092018);
        $this->assertEquals(10.092018, $obj->get16RemboursTva());
    }

    /**
     * Tests the set18CreditTvaca12() method.
     *
     * @return void
     */
    public function testSet18CreditTvaca12(): void {

        $obj = new DecTva3514();

        $obj->set18CreditTvaca12(10.092018);
        $this->assertEquals(10.092018, $obj->get18CreditTvaca12());
    }

    /**
     * Tests the set1MttAugmentation() method.
     *
     * @return void
     */
    public function testSet1MttAugmentation(): void {

        $obj = new DecTva3514();

        $obj->set1MttAugmentation(10.092018);
        $this->assertEquals(10.092018, $obj->get1MttAugmentation());
    }

    /**
     * Tests the set20AcompteTa1() method.
     *
     * @return void
     */
    public function testSet20AcompteTa1(): void {

        $obj = new DecTva3514();

        $obj->set20AcompteTa1(10.092018);
        $this->assertEquals(10.092018, $obj->get20AcompteTa1());
    }

    /**
     * Tests the set20AcompteTa2() method.
     *
     * @return void
     */
    public function testSet20AcompteTa2(): void {

        $obj = new DecTva3514();

        $obj->set20AcompteTa2(10.092018);
        $this->assertEquals(10.092018, $obj->get20AcompteTa2());
    }

    /**
     * Tests the set21AcompteTot1() method.
     *
     * @return void
     */
    public function testSet21AcompteTot1(): void {

        $obj = new DecTva3514();

        $obj->set21AcompteTot1(10.092018);
        $this->assertEquals(10.092018, $obj->get21AcompteTot1());
    }

    /**
     * Tests the set21AcompteTot2() method.
     *
     * @return void
     */
    public function testSet21AcompteTot2(): void {

        $obj = new DecTva3514();

        $obj->set21AcompteTot2(10.092018);
        $this->assertEquals(10.092018, $obj->get21AcompteTot2());
    }

    /**
     * Tests the set2BBaseHt7() method.
     *
     * @return void
     */
    public function testSet2BBaseHt7(): void {

        $obj = new DecTva3514();

        $obj->set2BBaseHt7(10.092018);
        $this->assertEquals(10.092018, $obj->get2BBaseHt7());
    }

    /**
     * Tests the set2BTaxeDue7() method.
     *
     * @return void
     */
    public function testSet2BTaxeDue7(): void {

        $obj = new DecTva3514();

        $obj->set2BTaxeDue7(10.092018);
        $this->assertEquals(10.092018, $obj->get2BTaxeDue7());
    }

    /**
     * Tests the set2MttCreditPrec() method.
     *
     * @return void
     */
    public function testSet2MttCreditPrec(): void {

        $obj = new DecTva3514();

        $obj->set2MttCreditPrec(10.092018);
        $this->assertEquals(10.092018, $obj->get2MttCreditPrec());
    }

    /**
     * Tests the set2MttDiminution() method.
     *
     * @return void
     */
    public function testSet2MttDiminution(): void {

        $obj = new DecTva3514();

        $obj->set2MttDiminution(10.092018);
        $this->assertEquals(10.092018, $obj->get2MttDiminution());
    }

    /**
     * Tests the set3MttDiminution() method.
     *
     * @return void
     */
    public function testSet3MttDiminution(): void {

        $obj = new DecTva3514();

        $obj->set3MttDiminution(10.092018);
        $this->assertEquals(10.092018, $obj->get3MttDiminution());
    }

    /**
     * Tests the set3Suspension() method.
     *
     * @return void
     */
    public function testSet3Suspension(): void {

        $obj = new DecTva3514();

        $obj->set3Suspension(10);
        $this->assertEquals(10, $obj->get3Suspension());
    }

    /**
     * Tests the set4HasDiminution() method.
     *
     * @return void
     */
    public function testSet4HasDiminution(): void {

        $obj = new DecTva3514();

        $obj->set4HasDiminution(true);
        $this->assertEquals(true, $obj->get4HasDiminution());
    }

    /**
     * Tests the set4MttDiminution() method.
     *
     * @return void
     */
    public function testSet4MttDiminution(): void {

        $obj = new DecTva3514();

        $obj->set4MttDiminution(10.092018);
        $this->assertEquals(10.092018, $obj->get4MttDiminution());
    }

    /**
     * Tests the setAcompteDu() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetAcompteDu(): void {

        // Set a Date/time mock.
        $acompteDu = new DateTime("2018-09-10");

        $obj = new DecTva3514();

        $obj->setAcompteDu($acompteDu);
        $this->assertSame($acompteDu, $obj->getAcompteDu());
    }

    /**
     * Tests the setDateDec() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDec(): void {

        // Set a Date/time mock.
        $dateDec = new DateTime("2018-09-10");

        $obj = new DecTva3514();

        $obj->setDateDec($dateDec);
        $this->assertSame($dateDec, $obj->getDateDec());
    }

    /**
     * Tests the setDateLimiteDec() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateLimiteDec(): void {

        // Set a Date/time mock.
        $dateLimiteDec = new DateTime("2018-09-10");

        $obj = new DecTva3514();

        $obj->setDateLimiteDec($dateLimiteDec);
        $this->assertSame($dateLimiteDec, $obj->getDateLimiteDec());
    }

    /**
     * Tests the setDetCodeTa() method.
     *
     * @return void
     */
    public function testSetDetCodeTa(): void {

        $obj = new DecTva3514();

        $obj->setDetCodeTa("detCodeTa");
        $this->assertEquals("detCodeTa", $obj->getDetCodeTa());
    }

    /**
     * Tests the setDetTa1() method.
     *
     * @return void
     */
    public function testSetDetTa1(): void {

        $obj = new DecTva3514();

        $obj->setDetTa1("detTa1");
        $this->assertEquals("detTa1", $obj->getDetTa1());
    }

    /**
     * Tests the setDetTa2() method.
     *
     * @return void
     */
    public function testSetDetTa2(): void {

        $obj = new DecTva3514();

        $obj->setDetTa2("detTa2");
        $this->assertEquals("detTa2", $obj->getDetTa2());
    }

    /**
     * Tests the setDetTa3() method.
     *
     * @return void
     */
    public function testSetDetTa3(): void {

        $obj = new DecTva3514();

        $obj->setDetTa3("detTa3");
        $this->assertEquals("detTa3", $obj->getDetTa3());
    }

    /**
     * Tests the setDetTa4() method.
     *
     * @return void
     */
    public function testSetDetTa4(): void {

        $obj = new DecTva3514();

        $obj->setDetTa4("detTa4");
        $this->assertEquals("detTa4", $obj->getDetTa4());
    }

    /**
     * Tests the setExigibleLe() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetExigibleLe(): void {

        // Set a Date/time mock.
        $exigibleLe = new DateTime("2018-09-10");

        $obj = new DecTva3514();

        $obj->setExigibleLe($exigibleLe);
        $this->assertSame($exigibleLe, $obj->getExigibleLe());
    }

    /**
     * Tests the setMttAPayer() method.
     *
     * @return void
     */
    public function testSetMttAPayer(): void {

        $obj = new DecTva3514();

        $obj->setMttAPayer(10.092018);
        $this->assertEquals(10.092018, $obj->getMttAPayer());
    }

    /**
     * Tests the setMttDetTa1() method.
     *
     * @return void
     */
    public function testSetMttDetTa1(): void {

        $obj = new DecTva3514();

        $obj->setMttDetTa1(10.092018);
        $this->assertEquals(10.092018, $obj->getMttDetTa1());
    }

    /**
     * Tests the setMttDetTa2() method.
     *
     * @return void
     */
    public function testSetMttDetTa2(): void {

        $obj = new DecTva3514();

        $obj->setMttDetTa2(10.092018);
        $this->assertEquals(10.092018, $obj->getMttDetTa2());
    }

    /**
     * Tests the setMttDetTa3() method.
     *
     * @return void
     */
    public function testSetMttDetTa3(): void {

        $obj = new DecTva3514();

        $obj->setMttDetTa3(10.092018);
        $this->assertEquals(10.092018, $obj->getMttDetTa3());
    }

    /**
     * Tests the setMttDetTa4() method.
     *
     * @return void
     */
    public function testSetMttDetTa4(): void {

        $obj = new DecTva3514();

        $obj->setMttDetTa4(10.092018);
        $this->assertEquals(10.092018, $obj->getMttDetTa4());
    }

    /**
     * Tests the setMttDontTaxesAssim() method.
     *
     * @return void
     */
    public function testSetMttDontTaxesAssim(): void {

        $obj = new DecTva3514();

        $obj->setMttDontTaxesAssim(10.092018);
        $this->assertEquals(10.092018, $obj->getMttDontTaxesAssim());
    }

    /**
     * Tests the setMttDontTva() method.
     *
     * @return void
     */
    public function testSetMttDontTva(): void {

        $obj = new DecTva3514();

        $obj->setMttDontTva(10.092018);
        $this->assertEquals(10.092018, $obj->getMttDontTva());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode(): void {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new DecTva3514();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests the setz0151() method.
     *
     * @return void
     */
    public function testSetz0151(): void {

        $obj = new DecTva3514();

        $obj->setz0151(10.092018);
        $this->assertEquals(10.092018, $obj->getz0151());
    }

    /**
     * Tests the setz0207() method.
     *
     * @return void
     */
    public function testSetz0207(): void {

        $obj = new DecTva3514();

        $obj->setz0207(10.092018);
        $this->assertEquals(10.092018, $obj->getz0207());
    }

    /**
     * Tests the setzHa() method.
     *
     * @return void
     */
    public function testSetzHa(): void {

        $obj = new DecTva3514();

        $obj->setzHa(10.092018);
        $this->assertEquals(10.092018, $obj->getzHa());
    }

    /**
     * Tests the __construct() method.
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
