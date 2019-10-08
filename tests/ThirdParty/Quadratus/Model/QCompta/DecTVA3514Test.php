<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\DecTVA3514;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Dec t v a3514 model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class DecTVA3514Test extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DecTVA3514();

        $this->assertNull($obj->get02BaseHT196());
        $this->assertNull($obj->get02TaxeDue196());
        $this->assertNull($obj->get03BaseHT55());
        $this->assertNull($obj->get03TaxeDue55());
        $this->assertNull($obj->get04BaseHT85());
        $this->assertNull($obj->get04TaxeDue85());
        $this->assertNull($obj->get05BaseHT21());
        $this->assertNull($obj->get05TaxeDue21());
        $this->assertNull($obj->get06BaseHTAncTaux());
        $this->assertNull($obj->get06TaxeDueAncTaux());
        $this->assertNull($obj->get07BaseHTTauxPart());
        $this->assertNull($obj->get07TaxeDueTauxPart());
        $this->assertNull($obj->get08BaseHTTVAaReverser());
        $this->assertNull($obj->get08TaxeDueTVAaReverser());
        $this->assertNull($obj->get09TotalTVABrute());
        $this->assertNull($obj->get10BiensImmos());
        $this->assertNull($obj->get11AutresBiens());
        $this->assertNull($obj->get12Omission());
        $this->assertNull($obj->get13TotalTvaDeduc());
        $this->assertNull($obj->get14A());
        $this->assertNull($obj->get15B());
        $this->assertNull($obj->get16RemboursTVA());
        $this->assertNull($obj->get18CreditTVACA12());
        $this->assertNull($obj->get1MttAugmentation());
        $this->assertNull($obj->get20AcompteTA1());
        $this->assertNull($obj->get20AcompteTA2());
        $this->assertNull($obj->get21AcompteTot1());
        $this->assertNull($obj->get21AcompteTot2());
        $this->assertNull($obj->get2BBaseHT7());
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
        $this->assertNull($obj->getDetCodeTA());
        $this->assertNull($obj->getDetTA1());
        $this->assertNull($obj->getDetTA2());
        $this->assertNull($obj->getDetTA3());
        $this->assertNull($obj->getDetTA4());
        $this->assertNull($obj->getExigibleLe());
        $this->assertNull($obj->getMttAPayer());
        $this->assertNull($obj->getMttDetTA1());
        $this->assertNull($obj->getMttDetTA2());
        $this->assertNull($obj->getMttDetTA3());
        $this->assertNull($obj->getMttDetTA4());
        $this->assertNull($obj->getMttDontTVA());
        $this->assertNull($obj->getMttDontTaxesAssim());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getz0151());
        $this->assertNull($obj->getz0207());
        $this->assertNull($obj->getzHA());
    }

    /**
     * Tests the set02BaseHT196() method.
     *
     * @return void
     */
    public function testSet02BaseHT196() {

        $obj = new DecTVA3514();

        $obj->set02BaseHT196(10.092018);
        $this->assertEquals(10.092018, $obj->get02BaseHT196());
    }

    /**
     * Tests the set02TaxeDue196() method.
     *
     * @return void
     */
    public function testSet02TaxeDue196() {

        $obj = new DecTVA3514();

        $obj->set02TaxeDue196(10.092018);
        $this->assertEquals(10.092018, $obj->get02TaxeDue196());
    }

    /**
     * Tests the set03BaseHT55() method.
     *
     * @return void
     */
    public function testSet03BaseHT55() {

        $obj = new DecTVA3514();

        $obj->set03BaseHT55(10.092018);
        $this->assertEquals(10.092018, $obj->get03BaseHT55());
    }

    /**
     * Tests the set03TaxeDue55() method.
     *
     * @return void
     */
    public function testSet03TaxeDue55() {

        $obj = new DecTVA3514();

        $obj->set03TaxeDue55(10.092018);
        $this->assertEquals(10.092018, $obj->get03TaxeDue55());
    }

    /**
     * Tests the set04BaseHT85() method.
     *
     * @return void
     */
    public function testSet04BaseHT85() {

        $obj = new DecTVA3514();

        $obj->set04BaseHT85(10.092018);
        $this->assertEquals(10.092018, $obj->get04BaseHT85());
    }

    /**
     * Tests the set04TaxeDue85() method.
     *
     * @return void
     */
    public function testSet04TaxeDue85() {

        $obj = new DecTVA3514();

        $obj->set04TaxeDue85(10.092018);
        $this->assertEquals(10.092018, $obj->get04TaxeDue85());
    }

    /**
     * Tests the set05BaseHT21() method.
     *
     * @return void
     */
    public function testSet05BaseHT21() {

        $obj = new DecTVA3514();

        $obj->set05BaseHT21(10.092018);
        $this->assertEquals(10.092018, $obj->get05BaseHT21());
    }

    /**
     * Tests the set05TaxeDue21() method.
     *
     * @return void
     */
    public function testSet05TaxeDue21() {

        $obj = new DecTVA3514();

        $obj->set05TaxeDue21(10.092018);
        $this->assertEquals(10.092018, $obj->get05TaxeDue21());
    }

    /**
     * Tests the set06BaseHTAncTaux() method.
     *
     * @return void
     */
    public function testSet06BaseHTAncTaux() {

        $obj = new DecTVA3514();

        $obj->set06BaseHTAncTaux(10.092018);
        $this->assertEquals(10.092018, $obj->get06BaseHTAncTaux());
    }

    /**
     * Tests the set06TaxeDueAncTaux() method.
     *
     * @return void
     */
    public function testSet06TaxeDueAncTaux() {

        $obj = new DecTVA3514();

        $obj->set06TaxeDueAncTaux(10.092018);
        $this->assertEquals(10.092018, $obj->get06TaxeDueAncTaux());
    }

    /**
     * Tests the set07BaseHTTauxPart() method.
     *
     * @return void
     */
    public function testSet07BaseHTTauxPart() {

        $obj = new DecTVA3514();

        $obj->set07BaseHTTauxPart(10.092018);
        $this->assertEquals(10.092018, $obj->get07BaseHTTauxPart());
    }

    /**
     * Tests the set07TaxeDueTauxPart() method.
     *
     * @return void
     */
    public function testSet07TaxeDueTauxPart() {

        $obj = new DecTVA3514();

        $obj->set07TaxeDueTauxPart(10.092018);
        $this->assertEquals(10.092018, $obj->get07TaxeDueTauxPart());
    }

    /**
     * Tests the set08BaseHTTVAaReverser() method.
     *
     * @return void
     */
    public function testSet08BaseHTTVAaReverser() {

        $obj = new DecTVA3514();

        $obj->set08BaseHTTVAaReverser(10.092018);
        $this->assertEquals(10.092018, $obj->get08BaseHTTVAaReverser());
    }

    /**
     * Tests the set08TaxeDueTVAaReverser() method.
     *
     * @return void
     */
    public function testSet08TaxeDueTVAaReverser() {

        $obj = new DecTVA3514();

        $obj->set08TaxeDueTVAaReverser(10.092018);
        $this->assertEquals(10.092018, $obj->get08TaxeDueTVAaReverser());
    }

    /**
     * Tests the set09TotalTVABrute() method.
     *
     * @return void
     */
    public function testSet09TotalTVABrute() {

        $obj = new DecTVA3514();

        $obj->set09TotalTVABrute(10.092018);
        $this->assertEquals(10.092018, $obj->get09TotalTVABrute());
    }

    /**
     * Tests the set10BiensImmos() method.
     *
     * @return void
     */
    public function testSet10BiensImmos() {

        $obj = new DecTVA3514();

        $obj->set10BiensImmos(10.092018);
        $this->assertEquals(10.092018, $obj->get10BiensImmos());
    }

    /**
     * Tests the set11AutresBiens() method.
     *
     * @return void
     */
    public function testSet11AutresBiens() {

        $obj = new DecTVA3514();

        $obj->set11AutresBiens(10.092018);
        $this->assertEquals(10.092018, $obj->get11AutresBiens());
    }

    /**
     * Tests the set12Omission() method.
     *
     * @return void
     */
    public function testSet12Omission() {

        $obj = new DecTVA3514();

        $obj->set12Omission(10.092018);
        $this->assertEquals(10.092018, $obj->get12Omission());
    }

    /**
     * Tests the set13TotalTvaDeduc() method.
     *
     * @return void
     */
    public function testSet13TotalTvaDeduc() {

        $obj = new DecTVA3514();

        $obj->set13TotalTvaDeduc(10.092018);
        $this->assertEquals(10.092018, $obj->get13TotalTvaDeduc());
    }

    /**
     * Tests the set14A() method.
     *
     * @return void
     */
    public function testSet14A() {

        $obj = new DecTVA3514();

        $obj->set14A(10.092018);
        $this->assertEquals(10.092018, $obj->get14A());
    }

    /**
     * Tests the set15B() method.
     *
     * @return void
     */
    public function testSet15B() {

        $obj = new DecTVA3514();

        $obj->set15B(10.092018);
        $this->assertEquals(10.092018, $obj->get15B());
    }

    /**
     * Tests the set16RemboursTVA() method.
     *
     * @return void
     */
    public function testSet16RemboursTVA() {

        $obj = new DecTVA3514();

        $obj->set16RemboursTVA(10.092018);
        $this->assertEquals(10.092018, $obj->get16RemboursTVA());
    }

    /**
     * Tests the set18CreditTVACA12() method.
     *
     * @return void
     */
    public function testSet18CreditTVACA12() {

        $obj = new DecTVA3514();

        $obj->set18CreditTVACA12(10.092018);
        $this->assertEquals(10.092018, $obj->get18CreditTVACA12());
    }

    /**
     * Tests the set1MttAugmentation() method.
     *
     * @return void
     */
    public function testSet1MttAugmentation() {

        $obj = new DecTVA3514();

        $obj->set1MttAugmentation(10.092018);
        $this->assertEquals(10.092018, $obj->get1MttAugmentation());
    }

    /**
     * Tests the set20AcompteTA1() method.
     *
     * @return void
     */
    public function testSet20AcompteTA1() {

        $obj = new DecTVA3514();

        $obj->set20AcompteTA1(10.092018);
        $this->assertEquals(10.092018, $obj->get20AcompteTA1());
    }

    /**
     * Tests the set20AcompteTA2() method.
     *
     * @return void
     */
    public function testSet20AcompteTA2() {

        $obj = new DecTVA3514();

        $obj->set20AcompteTA2(10.092018);
        $this->assertEquals(10.092018, $obj->get20AcompteTA2());
    }

    /**
     * Tests the set21AcompteTot1() method.
     *
     * @return void
     */
    public function testSet21AcompteTot1() {

        $obj = new DecTVA3514();

        $obj->set21AcompteTot1(10.092018);
        $this->assertEquals(10.092018, $obj->get21AcompteTot1());
    }

    /**
     * Tests the set21AcompteTot2() method.
     *
     * @return void
     */
    public function testSet21AcompteTot2() {

        $obj = new DecTVA3514();

        $obj->set21AcompteTot2(10.092018);
        $this->assertEquals(10.092018, $obj->get21AcompteTot2());
    }

    /**
     * Tests the set2BBaseHT7() method.
     *
     * @return void
     */
    public function testSet2BBaseHT7() {

        $obj = new DecTVA3514();

        $obj->set2BBaseHT7(10.092018);
        $this->assertEquals(10.092018, $obj->get2BBaseHT7());
    }

    /**
     * Tests the set2BTaxeDue7() method.
     *
     * @return void
     */
    public function testSet2BTaxeDue7() {

        $obj = new DecTVA3514();

        $obj->set2BTaxeDue7(10.092018);
        $this->assertEquals(10.092018, $obj->get2BTaxeDue7());
    }

    /**
     * Tests the set2MttCreditPrec() method.
     *
     * @return void
     */
    public function testSet2MttCreditPrec() {

        $obj = new DecTVA3514();

        $obj->set2MttCreditPrec(10.092018);
        $this->assertEquals(10.092018, $obj->get2MttCreditPrec());
    }

    /**
     * Tests the set2MttDiminution() method.
     *
     * @return void
     */
    public function testSet2MttDiminution() {

        $obj = new DecTVA3514();

        $obj->set2MttDiminution(10.092018);
        $this->assertEquals(10.092018, $obj->get2MttDiminution());
    }

    /**
     * Tests the set3MttDiminution() method.
     *
     * @return void
     */
    public function testSet3MttDiminution() {

        $obj = new DecTVA3514();

        $obj->set3MttDiminution(10.092018);
        $this->assertEquals(10.092018, $obj->get3MttDiminution());
    }

    /**
     * Tests the set3Suspension() method.
     *
     * @return void
     */
    public function testSet3Suspension() {

        $obj = new DecTVA3514();

        $obj->set3Suspension(10);
        $this->assertEquals(10, $obj->get3Suspension());
    }

    /**
     * Tests the set4HasDiminution() method.
     *
     * @return void
     */
    public function testSet4HasDiminution() {

        $obj = new DecTVA3514();

        $obj->set4HasDiminution(true);
        $this->assertEquals(true, $obj->get4HasDiminution());
    }

    /**
     * Tests the set4MttDiminution() method.
     *
     * @return void
     */
    public function testSet4MttDiminution() {

        $obj = new DecTVA3514();

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

        $obj = new DecTVA3514();

        $obj->setAcompteDu(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getAcompteDu());
    }

    /**
     * Tests the setDateDec() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDec() {

        $obj = new DecTVA3514();

        $obj->setDateDec(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDec());
    }

    /**
     * Tests the setDateLimiteDec() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateLimiteDec() {

        $obj = new DecTVA3514();

        $obj->setDateLimiteDec(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateLimiteDec());
    }

    /**
     * Tests the setDetCodeTA() method.
     *
     * @return void
     */
    public function testSetDetCodeTA() {

        $obj = new DecTVA3514();

        $obj->setDetCodeTA("detCodeTA");
        $this->assertEquals("detCodeTA", $obj->getDetCodeTA());
    }

    /**
     * Tests the setDetTA1() method.
     *
     * @return void
     */
    public function testSetDetTA1() {

        $obj = new DecTVA3514();

        $obj->setDetTA1("detTA1");
        $this->assertEquals("detTA1", $obj->getDetTA1());
    }

    /**
     * Tests the setDetTA2() method.
     *
     * @return void
     */
    public function testSetDetTA2() {

        $obj = new DecTVA3514();

        $obj->setDetTA2("detTA2");
        $this->assertEquals("detTA2", $obj->getDetTA2());
    }

    /**
     * Tests the setDetTA3() method.
     *
     * @return void
     */
    public function testSetDetTA3() {

        $obj = new DecTVA3514();

        $obj->setDetTA3("detTA3");
        $this->assertEquals("detTA3", $obj->getDetTA3());
    }

    /**
     * Tests the setDetTA4() method.
     *
     * @return void
     */
    public function testSetDetTA4() {

        $obj = new DecTVA3514();

        $obj->setDetTA4("detTA4");
        $this->assertEquals("detTA4", $obj->getDetTA4());
    }

    /**
     * Tests the setExigibleLe() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetExigibleLe() {

        $obj = new DecTVA3514();

        $obj->setExigibleLe(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getExigibleLe());
    }

    /**
     * Tests the setMttAPayer() method.
     *
     * @return void
     */
    public function testSetMttAPayer() {

        $obj = new DecTVA3514();

        $obj->setMttAPayer(10.092018);
        $this->assertEquals(10.092018, $obj->getMttAPayer());
    }

    /**
     * Tests the setMttDetTA1() method.
     *
     * @return void
     */
    public function testSetMttDetTA1() {

        $obj = new DecTVA3514();

        $obj->setMttDetTA1(10.092018);
        $this->assertEquals(10.092018, $obj->getMttDetTA1());
    }

    /**
     * Tests the setMttDetTA2() method.
     *
     * @return void
     */
    public function testSetMttDetTA2() {

        $obj = new DecTVA3514();

        $obj->setMttDetTA2(10.092018);
        $this->assertEquals(10.092018, $obj->getMttDetTA2());
    }

    /**
     * Tests the setMttDetTA3() method.
     *
     * @return void
     */
    public function testSetMttDetTA3() {

        $obj = new DecTVA3514();

        $obj->setMttDetTA3(10.092018);
        $this->assertEquals(10.092018, $obj->getMttDetTA3());
    }

    /**
     * Tests the setMttDetTA4() method.
     *
     * @return void
     */
    public function testSetMttDetTA4() {

        $obj = new DecTVA3514();

        $obj->setMttDetTA4(10.092018);
        $this->assertEquals(10.092018, $obj->getMttDetTA4());
    }

    /**
     * Tests the setMttDontTVA() method.
     *
     * @return void
     */
    public function testSetMttDontTVA() {

        $obj = new DecTVA3514();

        $obj->setMttDontTVA(10.092018);
        $this->assertEquals(10.092018, $obj->getMttDontTVA());
    }

    /**
     * Tests the setMttDontTaxesAssim() method.
     *
     * @return void
     */
    public function testSetMttDontTaxesAssim() {

        $obj = new DecTVA3514();

        $obj->setMttDontTaxesAssim(10.092018);
        $this->assertEquals(10.092018, $obj->getMttDontTaxesAssim());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode() {

        $obj = new DecTVA3514();

        $obj->setPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
    }

    /**
     * Tests the setz0151() method.
     *
     * @return void
     */
    public function testSetz0151() {

        $obj = new DecTVA3514();

        $obj->setz0151(10.092018);
        $this->assertEquals(10.092018, $obj->getz0151());
    }

    /**
     * Tests the setz0207() method.
     *
     * @return void
     */
    public function testSetz0207() {

        $obj = new DecTVA3514();

        $obj->setz0207(10.092018);
        $this->assertEquals(10.092018, $obj->getz0207());
    }

    /**
     * Tests the setzHA() method.
     *
     * @return void
     */
    public function testSetzHA() {

        $obj = new DecTVA3514();

        $obj->setzHA(10.092018);
        $this->assertEquals(10.092018, $obj->getzHA());
    }
}
