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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\DecTVA3519;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Dec t v a3519 model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class DecTVA3519Test extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DecTVA3519();

        $this->assertNull($obj->getAutresOpe1());
        $this->assertNull($obj->getAutresOpe2());
        $this->assertNull($obj->getAutresOpe3());
        $this->assertNull($obj->getAutresOpe4());
        $this->assertNull($obj->getAutresOpeTotal());
        $this->assertNull($obj->getBIC());
        $this->assertNull($obj->getCommentaires1());
        $this->assertNull($obj->getCommentaires2());
        $this->assertNull($obj->getCommentaires3());
        $this->assertNull($obj->getCommentaires4());
        $this->assertNull($obj->getCommentaires5());
        $this->assertNull($obj->getCreditCompte());
        $this->assertNull($obj->getCreditImputer());
        $this->assertNull($obj->getCreditNonRemb());
        $this->assertNull($obj->getDateCession());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateDemande());
        $this->assertNull($obj->getExpBiens1());
        $this->assertNull($obj->getExpBiens2());
        $this->assertNull($obj->getExpBiens3());
        $this->assertNull($obj->getExpBiens4());
        $this->assertNull($obj->getExpBiensTotal());
        $this->assertNull($obj->getExpPeriodes());
        $this->assertNull($obj->getIBAN());
        $this->assertNull($obj->getIntracom1());
        $this->assertNull($obj->getIntracom2());
        $this->assertNull($obj->getIntracom3());
        $this->assertNull($obj->getIntracom4());
        $this->assertNull($obj->getIntracomTotal());
        $this->assertNull($obj->getMois1());
        $this->assertNull($obj->getMois2());
        $this->assertNull($obj->getMois3());
        $this->assertNull($obj->getMontant1());
        $this->assertNull($obj->getMontant2());
        $this->assertNull($obj->getMontant3());
        $this->assertNull($obj->getMontantRbt());
        $this->assertNull($obj->getNationalite());
        $this->assertNull($obj->getNomPrenom());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPlafondRbt());
        $this->assertNull($obj->getQualite());
        $this->assertNull($obj->getRIB());
        $this->assertNull($obj->getRbtDemande());
        $this->assertNull($obj->getReportCredit());
        $this->assertNull($obj->getTVAFictive1());
        $this->assertNull($obj->getTVAFictive2());
        $this->assertNull($obj->getTVAFictive3());
        $this->assertNull($obj->getTVAFictive4());
        $this->assertNull($obj->getTVAFictive5());
        $this->assertNull($obj->getTVAFictivePrec());
        $this->assertNull($obj->getTVAFictivePres());
        $this->assertNull($obj->getTauxTVA1());
        $this->assertNull($obj->getTauxTVA2());
        $this->assertNull($obj->getTauxTVA3());
        $this->assertNull($obj->getTauxTVA4());
        $this->assertNull($obj->getTotalColonne1());
        $this->assertNull($obj->getTotalColonne2());
        $this->assertNull($obj->getTotalColonne3());
        $this->assertNull($obj->getTotalColonne4());
        $this->assertNull($obj->getTotalColonne5());
        $this->assertNull($obj->getTypeDemande());
        $this->assertNull($obj->getVille());
    }

    /**
     * Tests the setAutresOpe1() method.
     *
     * @return void
     */
    public function testSetAutresOpe1() {

        $obj = new DecTVA3519();

        $obj->setAutresOpe1(10.092018);
        $this->assertEquals(10.092018, $obj->getAutresOpe1());
    }

    /**
     * Tests the setAutresOpe2() method.
     *
     * @return void
     */
    public function testSetAutresOpe2() {

        $obj = new DecTVA3519();

        $obj->setAutresOpe2(10.092018);
        $this->assertEquals(10.092018, $obj->getAutresOpe2());
    }

    /**
     * Tests the setAutresOpe3() method.
     *
     * @return void
     */
    public function testSetAutresOpe3() {

        $obj = new DecTVA3519();

        $obj->setAutresOpe3(10.092018);
        $this->assertEquals(10.092018, $obj->getAutresOpe3());
    }

    /**
     * Tests the setAutresOpe4() method.
     *
     * @return void
     */
    public function testSetAutresOpe4() {

        $obj = new DecTVA3519();

        $obj->setAutresOpe4(10.092018);
        $this->assertEquals(10.092018, $obj->getAutresOpe4());
    }

    /**
     * Tests the setAutresOpeTotal() method.
     *
     * @return void
     */
    public function testSetAutresOpeTotal() {

        $obj = new DecTVA3519();

        $obj->setAutresOpeTotal(10.092018);
        $this->assertEquals(10.092018, $obj->getAutresOpeTotal());
    }

    /**
     * Tests the setBIC() method.
     *
     * @return void
     */
    public function testSetBIC() {

        $obj = new DecTVA3519();

        $obj->setBIC("bIC");
        $this->assertEquals("bIC", $obj->getBIC());
    }

    /**
     * Tests the setCommentaires1() method.
     *
     * @return void
     */
    public function testSetCommentaires1() {

        $obj = new DecTVA3519();

        $obj->setCommentaires1("commentaires1");
        $this->assertEquals("commentaires1", $obj->getCommentaires1());
    }

    /**
     * Tests the setCommentaires2() method.
     *
     * @return void
     */
    public function testSetCommentaires2() {

        $obj = new DecTVA3519();

        $obj->setCommentaires2("commentaires2");
        $this->assertEquals("commentaires2", $obj->getCommentaires2());
    }

    /**
     * Tests the setCommentaires3() method.
     *
     * @return void
     */
    public function testSetCommentaires3() {

        $obj = new DecTVA3519();

        $obj->setCommentaires3("commentaires3");
        $this->assertEquals("commentaires3", $obj->getCommentaires3());
    }

    /**
     * Tests the setCommentaires4() method.
     *
     * @return void
     */
    public function testSetCommentaires4() {

        $obj = new DecTVA3519();

        $obj->setCommentaires4("commentaires4");
        $this->assertEquals("commentaires4", $obj->getCommentaires4());
    }

    /**
     * Tests the setCommentaires5() method.
     *
     * @return void
     */
    public function testSetCommentaires5() {

        $obj = new DecTVA3519();

        $obj->setCommentaires5("commentaires5");
        $this->assertEquals("commentaires5", $obj->getCommentaires5());
    }

    /**
     * Tests the setCreditCompte() method.
     *
     * @return void
     */
    public function testSetCreditCompte() {

        $obj = new DecTVA3519();

        $obj->setCreditCompte(true);
        $this->assertEquals(true, $obj->getCreditCompte());
    }

    /**
     * Tests the setCreditImputer() method.
     *
     * @return void
     */
    public function testSetCreditImputer() {

        $obj = new DecTVA3519();

        $obj->setCreditImputer(true);
        $this->assertEquals(true, $obj->getCreditImputer());
    }

    /**
     * Tests the setCreditNonRemb() method.
     *
     * @return void
     */
    public function testSetCreditNonRemb() {

        $obj = new DecTVA3519();

        $obj->setCreditNonRemb(10.092018);
        $this->assertEquals(10.092018, $obj->getCreditNonRemb());
    }

    /**
     * Tests the setDateCession() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCession() {

        $obj = new DecTVA3519();

        $obj->setDateCession(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCession());
    }

    /**
     * Tests the setDateCreation() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCreation() {

        $obj = new DecTVA3519();

        $obj->setDateCreation(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCreation());
    }

    /**
     * Tests the setDateDemande() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDemande() {

        $obj = new DecTVA3519();

        $obj->setDateDemande(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDemande());
    }

    /**
     * Tests the setExpBiens1() method.
     *
     * @return void
     */
    public function testSetExpBiens1() {

        $obj = new DecTVA3519();

        $obj->setExpBiens1(10.092018);
        $this->assertEquals(10.092018, $obj->getExpBiens1());
    }

    /**
     * Tests the setExpBiens2() method.
     *
     * @return void
     */
    public function testSetExpBiens2() {

        $obj = new DecTVA3519();

        $obj->setExpBiens2(10.092018);
        $this->assertEquals(10.092018, $obj->getExpBiens2());
    }

    /**
     * Tests the setExpBiens3() method.
     *
     * @return void
     */
    public function testSetExpBiens3() {

        $obj = new DecTVA3519();

        $obj->setExpBiens3(10.092018);
        $this->assertEquals(10.092018, $obj->getExpBiens3());
    }

    /**
     * Tests the setExpBiens4() method.
     *
     * @return void
     */
    public function testSetExpBiens4() {

        $obj = new DecTVA3519();

        $obj->setExpBiens4(10.092018);
        $this->assertEquals(10.092018, $obj->getExpBiens4());
    }

    /**
     * Tests the setExpBiensTotal() method.
     *
     * @return void
     */
    public function testSetExpBiensTotal() {

        $obj = new DecTVA3519();

        $obj->setExpBiensTotal(10.092018);
        $this->assertEquals(10.092018, $obj->getExpBiensTotal());
    }

    /**
     * Tests the setExpPeriodes() method.
     *
     * @return void
     */
    public function testSetExpPeriodes() {

        $obj = new DecTVA3519();

        $obj->setExpPeriodes("expPeriodes");
        $this->assertEquals("expPeriodes", $obj->getExpPeriodes());
    }

    /**
     * Tests the setIBAN() method.
     *
     * @return void
     */
    public function testSetIBAN() {

        $obj = new DecTVA3519();

        $obj->setIBAN("iBAN");
        $this->assertEquals("iBAN", $obj->getIBAN());
    }

    /**
     * Tests the setIntracom1() method.
     *
     * @return void
     */
    public function testSetIntracom1() {

        $obj = new DecTVA3519();

        $obj->setIntracom1(10.092018);
        $this->assertEquals(10.092018, $obj->getIntracom1());
    }

    /**
     * Tests the setIntracom2() method.
     *
     * @return void
     */
    public function testSetIntracom2() {

        $obj = new DecTVA3519();

        $obj->setIntracom2(10.092018);
        $this->assertEquals(10.092018, $obj->getIntracom2());
    }

    /**
     * Tests the setIntracom3() method.
     *
     * @return void
     */
    public function testSetIntracom3() {

        $obj = new DecTVA3519();

        $obj->setIntracom3(10.092018);
        $this->assertEquals(10.092018, $obj->getIntracom3());
    }

    /**
     * Tests the setIntracom4() method.
     *
     * @return void
     */
    public function testSetIntracom4() {

        $obj = new DecTVA3519();

        $obj->setIntracom4(10.092018);
        $this->assertEquals(10.092018, $obj->getIntracom4());
    }

    /**
     * Tests the setIntracomTotal() method.
     *
     * @return void
     */
    public function testSetIntracomTotal() {

        $obj = new DecTVA3519();

        $obj->setIntracomTotal(10.092018);
        $this->assertEquals(10.092018, $obj->getIntracomTotal());
    }

    /**
     * Tests the setMois1() method.
     *
     * @return void
     */
    public function testSetMois1() {

        $obj = new DecTVA3519();

        $obj->setMois1(10);
        $this->assertEquals(10, $obj->getMois1());
    }

    /**
     * Tests the setMois2() method.
     *
     * @return void
     */
    public function testSetMois2() {

        $obj = new DecTVA3519();

        $obj->setMois2(10);
        $this->assertEquals(10, $obj->getMois2());
    }

    /**
     * Tests the setMois3() method.
     *
     * @return void
     */
    public function testSetMois3() {

        $obj = new DecTVA3519();

        $obj->setMois3(10);
        $this->assertEquals(10, $obj->getMois3());
    }

    /**
     * Tests the setMontant1() method.
     *
     * @return void
     */
    public function testSetMontant1() {

        $obj = new DecTVA3519();

        $obj->setMontant1(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant1());
    }

    /**
     * Tests the setMontant2() method.
     *
     * @return void
     */
    public function testSetMontant2() {

        $obj = new DecTVA3519();

        $obj->setMontant2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant2());
    }

    /**
     * Tests the setMontant3() method.
     *
     * @return void
     */
    public function testSetMontant3() {

        $obj = new DecTVA3519();

        $obj->setMontant3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant3());
    }

    /**
     * Tests the setMontantRbt() method.
     *
     * @return void
     */
    public function testSetMontantRbt() {

        $obj = new DecTVA3519();

        $obj->setMontantRbt(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantRbt());
    }

    /**
     * Tests the setNationalite() method.
     *
     * @return void
     */
    public function testSetNationalite() {

        $obj = new DecTVA3519();

        $obj->setNationalite(10);
        $this->assertEquals(10, $obj->getNationalite());
    }

    /**
     * Tests the setNomPrenom() method.
     *
     * @return void
     */
    public function testSetNomPrenom() {

        $obj = new DecTVA3519();

        $obj->setNomPrenom("nomPrenom");
        $this->assertEquals("nomPrenom", $obj->getNomPrenom());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode() {

        $obj = new DecTVA3519();

        $obj->setPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
    }

    /**
     * Tests the setPlafondRbt() method.
     *
     * @return void
     */
    public function testSetPlafondRbt() {

        $obj = new DecTVA3519();

        $obj->setPlafondRbt(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafondRbt());
    }

    /**
     * Tests the setQualite() method.
     *
     * @return void
     */
    public function testSetQualite() {

        $obj = new DecTVA3519();

        $obj->setQualite("qualite");
        $this->assertEquals("qualite", $obj->getQualite());
    }

    /**
     * Tests the setRIB() method.
     *
     * @return void
     */
    public function testSetRIB() {

        $obj = new DecTVA3519();

        $obj->setRIB("rIB");
        $this->assertEquals("rIB", $obj->getRIB());
    }

    /**
     * Tests the setRbtDemande() method.
     *
     * @return void
     */
    public function testSetRbtDemande() {

        $obj = new DecTVA3519();

        $obj->setRbtDemande(10.092018);
        $this->assertEquals(10.092018, $obj->getRbtDemande());
    }

    /**
     * Tests the setReportCredit() method.
     *
     * @return void
     */
    public function testSetReportCredit() {

        $obj = new DecTVA3519();

        $obj->setReportCredit(10.092018);
        $this->assertEquals(10.092018, $obj->getReportCredit());
    }

    /**
     * Tests the setTVAFictive1() method.
     *
     * @return void
     */
    public function testSetTVAFictive1() {

        $obj = new DecTVA3519();

        $obj->setTVAFictive1(10.092018);
        $this->assertEquals(10.092018, $obj->getTVAFictive1());
    }

    /**
     * Tests the setTVAFictive2() method.
     *
     * @return void
     */
    public function testSetTVAFictive2() {

        $obj = new DecTVA3519();

        $obj->setTVAFictive2(10.092018);
        $this->assertEquals(10.092018, $obj->getTVAFictive2());
    }

    /**
     * Tests the setTVAFictive3() method.
     *
     * @return void
     */
    public function testSetTVAFictive3() {

        $obj = new DecTVA3519();

        $obj->setTVAFictive3(10.092018);
        $this->assertEquals(10.092018, $obj->getTVAFictive3());
    }

    /**
     * Tests the setTVAFictive4() method.
     *
     * @return void
     */
    public function testSetTVAFictive4() {

        $obj = new DecTVA3519();

        $obj->setTVAFictive4(10.092018);
        $this->assertEquals(10.092018, $obj->getTVAFictive4());
    }

    /**
     * Tests the setTVAFictive5() method.
     *
     * @return void
     */
    public function testSetTVAFictive5() {

        $obj = new DecTVA3519();

        $obj->setTVAFictive5(10.092018);
        $this->assertEquals(10.092018, $obj->getTVAFictive5());
    }

    /**
     * Tests the setTVAFictivePrec() method.
     *
     * @return void
     */
    public function testSetTVAFictivePrec() {

        $obj = new DecTVA3519();

        $obj->setTVAFictivePrec(10.092018);
        $this->assertEquals(10.092018, $obj->getTVAFictivePrec());
    }

    /**
     * Tests the setTVAFictivePres() method.
     *
     * @return void
     */
    public function testSetTVAFictivePres() {

        $obj = new DecTVA3519();

        $obj->setTVAFictivePres(10.092018);
        $this->assertEquals(10.092018, $obj->getTVAFictivePres());
    }

    /**
     * Tests the setTauxTVA1() method.
     *
     * @return void
     */
    public function testSetTauxTVA1() {

        $obj = new DecTVA3519();

        $obj->setTauxTVA1(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTVA1());
    }

    /**
     * Tests the setTauxTVA2() method.
     *
     * @return void
     */
    public function testSetTauxTVA2() {

        $obj = new DecTVA3519();

        $obj->setTauxTVA2(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTVA2());
    }

    /**
     * Tests the setTauxTVA3() method.
     *
     * @return void
     */
    public function testSetTauxTVA3() {

        $obj = new DecTVA3519();

        $obj->setTauxTVA3(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTVA3());
    }

    /**
     * Tests the setTauxTVA4() method.
     *
     * @return void
     */
    public function testSetTauxTVA4() {

        $obj = new DecTVA3519();

        $obj->setTauxTVA4(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTVA4());
    }

    /**
     * Tests the setTotalColonne1() method.
     *
     * @return void
     */
    public function testSetTotalColonne1() {

        $obj = new DecTVA3519();

        $obj->setTotalColonne1(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalColonne1());
    }

    /**
     * Tests the setTotalColonne2() method.
     *
     * @return void
     */
    public function testSetTotalColonne2() {

        $obj = new DecTVA3519();

        $obj->setTotalColonne2(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalColonne2());
    }

    /**
     * Tests the setTotalColonne3() method.
     *
     * @return void
     */
    public function testSetTotalColonne3() {

        $obj = new DecTVA3519();

        $obj->setTotalColonne3(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalColonne3());
    }

    /**
     * Tests the setTotalColonne4() method.
     *
     * @return void
     */
    public function testSetTotalColonne4() {

        $obj = new DecTVA3519();

        $obj->setTotalColonne4(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalColonne4());
    }

    /**
     * Tests the setTotalColonne5() method.
     *
     * @return void
     */
    public function testSetTotalColonne5() {

        $obj = new DecTVA3519();

        $obj->setTotalColonne5(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalColonne5());
    }

    /**
     * Tests the setTypeDemande() method.
     *
     * @return void
     */
    public function testSetTypeDemande() {

        $obj = new DecTVA3519();

        $obj->setTypeDemande(10);
        $this->assertEquals(10, $obj->getTypeDemande());
    }

    /**
     * Tests the setVille() method.
     *
     * @return void
     */
    public function testSetVille() {

        $obj = new DecTVA3519();

        $obj->setVille("ville");
        $this->assertEquals("ville", $obj->getVille());
    }
}
