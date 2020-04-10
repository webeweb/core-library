<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\DecTva3514;

/**
 * Dec tva3514 test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class DecTva3514Test extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

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

    /**
     * Tests the set02BaseHt196() method.
     *
     * @return void
     */
    public function testSet02BaseHt196() {

        $obj = new DecTva3514();

        $obj->set02BaseHt196(10.092018);
        $this->assertEquals(10.092018, $obj->get02BaseHt196());
    }

    /**
     * Tests the set02TaxeDue196() method.
     *
     * @return void
     */
    public function testSet02TaxeDue196() {

        $obj = new DecTva3514();

        $obj->set02TaxeDue196(10.092018);
        $this->assertEquals(10.092018, $obj->get02TaxeDue196());
    }

    /**
     * Tests the set03BaseHt55() method.
     *
     * @return void
     */
    public function testSet03BaseHt55() {

        $obj = new DecTva3514();

        $obj->set03BaseHt55(10.092018);
        $this->assertEquals(10.092018, $obj->get03BaseHt55());
    }

    /**
     * Tests the set03TaxeDue55() method.
     *
     * @return void
     */
    public function testSet03TaxeDue55() {

        $obj = new DecTva3514();

        $obj->set03TaxeDue55(10.092018);
        $this->assertEquals(10.092018, $obj->get03TaxeDue55());
    }

    /**
     * Tests the set04BaseHt85() method.
     *
     * @return void
     */
    public function testSet04BaseHt85() {

        $obj = new DecTva3514();

        $obj->set04BaseHt85(10.092018);
        $this->assertEquals(10.092018, $obj->get04BaseHt85());
    }

    /**
     * Tests the set04TaxeDue85() method.
     *
     * @return void
     */
    public function testSet04TaxeDue85() {

        $obj = new DecTva3514();

        $obj->set04TaxeDue85(10.092018);
        $this->assertEquals(10.092018, $obj->get04TaxeDue85());
    }

    /**
     * Tests the set05BaseHt21() method.
     *
     * @return void
     */
    public function testSet05BaseHt21() {

        $obj = new DecTva3514();

        $obj->set05BaseHt21(10.092018);
        $this->assertEquals(10.092018, $obj->get05BaseHt21());
    }

    /**
     * Tests the set05TaxeDue21() method.
     *
     * @return void
     */
    public function testSet05TaxeDue21() {

        $obj = new DecTva3514();

        $obj->set05TaxeDue21(10.092018);
        $this->assertEquals(10.092018, $obj->get05TaxeDue21());
    }

    /**
     * Tests the set06BaseHtAncTaux() method.
     *
     * @return void
     */
    public function testSet06BaseHtAncTaux() {

        $obj = new DecTva3514();

        $obj->set06BaseHtAncTaux(10.092018);
        $this->assertEquals(10.092018, $obj->get06BaseHtAncTaux());
    }

    /**
     * Tests the set06TaxeDueAncTaux() method.
     *
     * @return void
     */
    public function testSet06TaxeDueAncTaux() {

        $obj = new DecTva3514();

        $obj->set06TaxeDueAncTaux(10.092018);
        $this->assertEquals(10.092018, $obj->get06TaxeDueAncTaux());
    }

    /**
     * Tests the set07BaseHtTauxPart() method.
     *
     * @return void
     */
    public function testSet07BaseHtTauxPart() {

        $obj = new DecTva3514();

        $obj->set07BaseHtTauxPart(10.092018);
        $this->assertEquals(10.092018, $obj->get07BaseHtTauxPart());
    }

    /**
     * Tests the set07TaxeDueTauxPart() method.
     *
     * @return void
     */
    public function testSet07TaxeDueTauxPart() {

        $obj = new DecTva3514();

        $obj->set07TaxeDueTauxPart(10.092018);
        $this->assertEquals(10.092018, $obj->get07TaxeDueTauxPart());
    }

    /**
     * Tests the set08BaseHttvAaReverser() method.
     *
     * @return void
     */
    public function testSet08BaseHttvAaReverser() {

        $obj = new DecTva3514();

        $obj->set08BaseHttvAaReverser(10.092018);
        $this->assertEquals(10.092018, $obj->get08BaseHttvAaReverser());
    }

    /**
     * Tests the set08TaxeDueTvAaReverser() method.
     *
     * @return void
     */
    public function testSet08TaxeDueTvAaReverser() {

        $obj = new DecTva3514();

        $obj->set08TaxeDueTvAaReverser(10.092018);
        $this->assertEquals(10.092018, $obj->get08TaxeDueTvAaReverser());
    }

    /**
     * Tests the set09TotalTvaBrute() method.
     *
     * @return void
     */
    public function testSet09TotalTvaBrute() {

        $obj = new DecTva3514();

        $obj->set09TotalTvaBrute(10.092018);
        $this->assertEquals(10.092018, $obj->get09TotalTvaBrute());
    }

    /**
     * Tests the set10BiensImmos() method.
     *
     * @return void
     */
    public function testSet10BiensImmos() {

        $obj = new DecTva3514();

        $obj->set10BiensImmos(10.092018);
        $this->assertEquals(10.092018, $obj->get10BiensImmos());
    }

    /**
     * Tests the set11AutresBiens() method.
     *
     * @return void
     */
    public function testSet11AutresBiens() {

        $obj = new DecTva3514();

        $obj->set11AutresBiens(10.092018);
        $this->assertEquals(10.092018, $obj->get11AutresBiens());
    }

    /**
     * Tests the set12Omission() method.
     *
     * @return void
     */
    public function testSet12Omission() {

        $obj = new DecTva3514();

        $obj->set12Omission(10.092018);
        $this->assertEquals(10.092018, $obj->get12Omission());
    }

    /**
     * Tests the set13TotalTvaDeduc() method.
     *
     * @return void
     */
    public function testSet13TotalTvaDeduc() {

        $obj = new DecTva3514();

        $obj->set13TotalTvaDeduc(10.092018);
        $this->assertEquals(10.092018, $obj->get13TotalTvaDeduc());
    }

    /**
     * Tests the set14A() method.
     *
     * @return void
     */
    public function testSet14A() {

        $obj = new DecTva3514();

        $obj->set14A(10.092018);
        $this->assertEquals(10.092018, $obj->get14A());
    }

    /**
     * Tests the set15B() method.
     *
     * @return void
     */
    public function testSet15B() {

        $obj = new DecTva3514();

        $obj->set15B(10.092018);
        $this->assertEquals(10.092018, $obj->get15B());
    }

    /**
     * Tests the set16RemboursTva() method.
     *
     * @return void
     */
    public function testSet16RemboursTva() {

        $obj = new DecTva3514();

        $obj->set16RemboursTva(10.092018);
        $this->assertEquals(10.092018, $obj->get16RemboursTva());
    }

    /**
     * Tests the set18CreditTvaca12() method.
     *
     * @return void
     */
    public function testSet18CreditTvaca12() {

        $obj = new DecTva3514();

        $obj->set18CreditTvaca12(10.092018);
        $this->assertEquals(10.092018, $obj->get18CreditTvaca12());
    }

    /**
     * Tests the set1MttAugmentation() method.
     *
     * @return void
     */
    public function testSet1MttAugmentation() {

        $obj = new DecTva3514();

        $obj->set1MttAugmentation(10.092018);
        $this->assertEquals(10.092018, $obj->get1MttAugmentation());
    }

    /**
     * Tests the set20AcompteTa1() method.
     *
     * @return void
     */
    public function testSet20AcompteTa1() {

        $obj = new DecTva3514();

        $obj->set20AcompteTa1(10.092018);
        $this->assertEquals(10.092018, $obj->get20AcompteTa1());
    }

    /**
     * Tests the set20AcompteTa2() method.
     *
     * @return void
     */
    public function testSet20AcompteTa2() {

        $obj = new DecTva3514();

        $obj->set20AcompteTa2(10.092018);
        $this->assertEquals(10.092018, $obj->get20AcompteTa2());
    }

    /**
     * Tests the set21AcompteTot1() method.
     *
     * @return void
     */
    public function testSet21AcompteTot1() {

        $obj = new DecTva3514();

        $obj->set21AcompteTot1(10.092018);
        $this->assertEquals(10.092018, $obj->get21AcompteTot1());
    }

    /**
     * Tests the set21AcompteTot2() method.
     *
     * @return void
     */
    public function testSet21AcompteTot2() {

        $obj = new DecTva3514();

        $obj->set21AcompteTot2(10.092018);
        $this->assertEquals(10.092018, $obj->get21AcompteTot2());
    }

    /**
     * Tests the set2BBaseHt7() method.
     *
     * @return void
     */
    public function testSet2BBaseHt7() {

        $obj = new DecTva3514();

        $obj->set2BBaseHt7(10.092018);
        $this->assertEquals(10.092018, $obj->get2BBaseHt7());
    }

    /**
     * Tests the set2BTaxeDue7() method.
     *
     * @return void
     */
    public function testSet2BTaxeDue7() {

        $obj = new DecTva3514();

        $obj->set2BTaxeDue7(10.092018);
        $this->assertEquals(10.092018, $obj->get2BTaxeDue7());
    }

    /**
     * Tests the set2MttCreditPrec() method.
     *
     * @return void
     */
    public function testSet2MttCreditPrec() {

        $obj = new DecTva3514();

        $obj->set2MttCreditPrec(10.092018);
        $this->assertEquals(10.092018, $obj->get2MttCreditPrec());
    }

    /**
     * Tests the set2MttDiminution() method.
     *
     * @return void
     */
    public function testSet2MttDiminution() {

        $obj = new DecTva3514();

        $obj->set2MttDiminution(10.092018);
        $this->assertEquals(10.092018, $obj->get2MttDiminution());
    }

    /**
     * Tests the set3MttDiminution() method.
     *
     * @return void
     */
    public function testSet3MttDiminution() {

        $obj = new DecTva3514();

        $obj->set3MttDiminution(10.092018);
        $this->assertEquals(10.092018, $obj->get3MttDiminution());
    }

    /**
     * Tests the set3Suspension() method.
     *
     * @return void
     */
    public function testSet3Suspension() {

        $obj = new DecTva3514();

        $obj->set3Suspension(10);
        $this->assertEquals(10, $obj->get3Suspension());
    }

    /**
     * Tests the set4HasDiminution() method.
     *
     * @return void
     */
    public function testSet4HasDiminution() {

        $obj = new DecTva3514();

        $obj->set4HasDiminution(true);
        $this->assertEquals(true, $obj->get4HasDiminution());
    }

    /**
     * Tests the set4MttDiminution() method.
     *
     * @return void
     */
    public function testSet4MttDiminution() {

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
    public function testSetAcompteDu() {

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
    public function testSetDateDec() {

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
    public function testSetDateLimiteDec() {

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
    public function testSetDetCodeTa() {

        $obj = new DecTva3514();

        $obj->setDetCodeTa("detCodeTa");
        $this->assertEquals("detCodeTa", $obj->getDetCodeTa());
    }

    /**
     * Tests the setDetTa1() method.
     *
     * @return void
     */
    public function testSetDetTa1() {

        $obj = new DecTva3514();

        $obj->setDetTa1("detTa1");
        $this->assertEquals("detTa1", $obj->getDetTa1());
    }

    /**
     * Tests the setDetTa2() method.
     *
     * @return void
     */
    public function testSetDetTa2() {

        $obj = new DecTva3514();

        $obj->setDetTa2("detTa2");
        $this->assertEquals("detTa2", $obj->getDetTa2());
    }

    /**
     * Tests the setDetTa3() method.
     *
     * @return void
     */
    public function testSetDetTa3() {

        $obj = new DecTva3514();

        $obj->setDetTa3("detTa3");
        $this->assertEquals("detTa3", $obj->getDetTa3());
    }

    /**
     * Tests the setDetTa4() method.
     *
     * @return void
     */
    public function testSetDetTa4() {

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
    public function testSetExigibleLe() {

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
    public function testSetMttAPayer() {

        $obj = new DecTva3514();

        $obj->setMttAPayer(10.092018);
        $this->assertEquals(10.092018, $obj->getMttAPayer());
    }

    /**
     * Tests the setMttDetTa1() method.
     *
     * @return void
     */
    public function testSetMttDetTa1() {

        $obj = new DecTva3514();

        $obj->setMttDetTa1(10.092018);
        $this->assertEquals(10.092018, $obj->getMttDetTa1());
    }

    /**
     * Tests the setMttDetTa2() method.
     *
     * @return void
     */
    public function testSetMttDetTa2() {

        $obj = new DecTva3514();

        $obj->setMttDetTa2(10.092018);
        $this->assertEquals(10.092018, $obj->getMttDetTa2());
    }

    /**
     * Tests the setMttDetTa3() method.
     *
     * @return void
     */
    public function testSetMttDetTa3() {

        $obj = new DecTva3514();

        $obj->setMttDetTa3(10.092018);
        $this->assertEquals(10.092018, $obj->getMttDetTa3());
    }

    /**
     * Tests the setMttDetTa4() method.
     *
     * @return void
     */
    public function testSetMttDetTa4() {

        $obj = new DecTva3514();

        $obj->setMttDetTa4(10.092018);
        $this->assertEquals(10.092018, $obj->getMttDetTa4());
    }

    /**
     * Tests the setMttDontTaxesAssim() method.
     *
     * @return void
     */
    public function testSetMttDontTaxesAssim() {

        $obj = new DecTva3514();

        $obj->setMttDontTaxesAssim(10.092018);
        $this->assertEquals(10.092018, $obj->getMttDontTaxesAssim());
    }

    /**
     * Tests the setMttDontTva() method.
     *
     * @return void
     */
    public function testSetMttDontTva() {

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
    public function testSetPeriode() {

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
    public function testSetz0151() {

        $obj = new DecTva3514();

        $obj->setz0151(10.092018);
        $this->assertEquals(10.092018, $obj->getz0151());
    }

    /**
     * Tests the setz0207() method.
     *
     * @return void
     */
    public function testSetz0207() {

        $obj = new DecTva3514();

        $obj->setz0207(10.092018);
        $this->assertEquals(10.092018, $obj->getz0207());
    }

    /**
     * Tests the setzHa() method.
     *
     * @return void
     */
    public function testSetzHa() {

        $obj = new DecTva3514();

        $obj->setzHa(10.092018);
        $this->assertEquals(10.092018, $obj->getzHa());
    }
}
