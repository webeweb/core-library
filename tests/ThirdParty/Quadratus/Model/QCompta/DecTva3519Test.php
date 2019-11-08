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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\DecTva3519;

/**
 * Dec tva3519 test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class DecTva3519Test extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DecTva3519();

        $this->assertNull($obj->getAutresOpe1());
        $this->assertNull($obj->getAutresOpe2());
        $this->assertNull($obj->getAutresOpe3());
        $this->assertNull($obj->getAutresOpe4());
        $this->assertNull($obj->getAutresOpeTotal());
        $this->assertNull($obj->getBic());
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
        $this->assertNull($obj->getIban());
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
        $this->assertNull($obj->getRib());
        $this->assertNull($obj->getRbtDemande());
        $this->assertNull($obj->getReportCredit());
        $this->assertNull($obj->getTvaFictive1());
        $this->assertNull($obj->getTvaFictive2());
        $this->assertNull($obj->getTvaFictive3());
        $this->assertNull($obj->getTvaFictive4());
        $this->assertNull($obj->getTvaFictive5());
        $this->assertNull($obj->getTvaFictivePrec());
        $this->assertNull($obj->getTvaFictivePres());
        $this->assertNull($obj->getTauxTva1());
        $this->assertNull($obj->getTauxTva2());
        $this->assertNull($obj->getTauxTva3());
        $this->assertNull($obj->getTauxTva4());
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

        $obj = new DecTva3519();

        $obj->setAutresOpe1(10.092018);
        $this->assertEquals(10.092018, $obj->getAutresOpe1());
    }

    /**
     * Tests the setAutresOpe2() method.
     *
     * @return void
     */
    public function testSetAutresOpe2() {

        $obj = new DecTva3519();

        $obj->setAutresOpe2(10.092018);
        $this->assertEquals(10.092018, $obj->getAutresOpe2());
    }

    /**
     * Tests the setAutresOpe3() method.
     *
     * @return void
     */
    public function testSetAutresOpe3() {

        $obj = new DecTva3519();

        $obj->setAutresOpe3(10.092018);
        $this->assertEquals(10.092018, $obj->getAutresOpe3());
    }

    /**
     * Tests the setAutresOpe4() method.
     *
     * @return void
     */
    public function testSetAutresOpe4() {

        $obj = new DecTva3519();

        $obj->setAutresOpe4(10.092018);
        $this->assertEquals(10.092018, $obj->getAutresOpe4());
    }

    /**
     * Tests the setAutresOpeTotal() method.
     *
     * @return void
     */
    public function testSetAutresOpeTotal() {

        $obj = new DecTva3519();

        $obj->setAutresOpeTotal(10.092018);
        $this->assertEquals(10.092018, $obj->getAutresOpeTotal());
    }

    /**
     * Tests the setBic() method.
     *
     * @return void
     */
    public function testSetBic() {

        $obj = new DecTva3519();

        $obj->setBic("bic");
        $this->assertEquals("bic", $obj->getBic());
    }

    /**
     * Tests the setCommentaires1() method.
     *
     * @return void
     */
    public function testSetCommentaires1() {

        $obj = new DecTva3519();

        $obj->setCommentaires1("commentaires1");
        $this->assertEquals("commentaires1", $obj->getCommentaires1());
    }

    /**
     * Tests the setCommentaires2() method.
     *
     * @return void
     */
    public function testSetCommentaires2() {

        $obj = new DecTva3519();

        $obj->setCommentaires2("commentaires2");
        $this->assertEquals("commentaires2", $obj->getCommentaires2());
    }

    /**
     * Tests the setCommentaires3() method.
     *
     * @return void
     */
    public function testSetCommentaires3() {

        $obj = new DecTva3519();

        $obj->setCommentaires3("commentaires3");
        $this->assertEquals("commentaires3", $obj->getCommentaires3());
    }

    /**
     * Tests the setCommentaires4() method.
     *
     * @return void
     */
    public function testSetCommentaires4() {

        $obj = new DecTva3519();

        $obj->setCommentaires4("commentaires4");
        $this->assertEquals("commentaires4", $obj->getCommentaires4());
    }

    /**
     * Tests the setCommentaires5() method.
     *
     * @return void
     */
    public function testSetCommentaires5() {

        $obj = new DecTva3519();

        $obj->setCommentaires5("commentaires5");
        $this->assertEquals("commentaires5", $obj->getCommentaires5());
    }

    /**
     * Tests the setCreditCompte() method.
     *
     * @return void
     */
    public function testSetCreditCompte() {

        $obj = new DecTva3519();

        $obj->setCreditCompte(true);
        $this->assertEquals(true, $obj->getCreditCompte());
    }

    /**
     * Tests the setCreditImputer() method.
     *
     * @return void
     */
    public function testSetCreditImputer() {

        $obj = new DecTva3519();

        $obj->setCreditImputer(true);
        $this->assertEquals(true, $obj->getCreditImputer());
    }

    /**
     * Tests the setCreditNonRemb() method.
     *
     * @return void
     */
    public function testSetCreditNonRemb() {

        $obj = new DecTva3519();

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

        // Set a Date/time mock.
        $dateCession = new DateTime("2018-09-10");

        $obj = new DecTva3519();

        $obj->setDateCession($dateCession);
        $this->assertSame($dateCession, $obj->getDateCession());
    }

    /**
     * Tests the setDateCreation() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCreation() {

        // Set a Date/time mock.
        $dateCreation = new DateTime("2018-09-10");

        $obj = new DecTva3519();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
    }

    /**
     * Tests the setDateDemande() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDemande() {

        // Set a Date/time mock.
        $dateDemande = new DateTime("2018-09-10");

        $obj = new DecTva3519();

        $obj->setDateDemande($dateDemande);
        $this->assertSame($dateDemande, $obj->getDateDemande());
    }

    /**
     * Tests the setExpBiens1() method.
     *
     * @return void
     */
    public function testSetExpBiens1() {

        $obj = new DecTva3519();

        $obj->setExpBiens1(10.092018);
        $this->assertEquals(10.092018, $obj->getExpBiens1());
    }

    /**
     * Tests the setExpBiens2() method.
     *
     * @return void
     */
    public function testSetExpBiens2() {

        $obj = new DecTva3519();

        $obj->setExpBiens2(10.092018);
        $this->assertEquals(10.092018, $obj->getExpBiens2());
    }

    /**
     * Tests the setExpBiens3() method.
     *
     * @return void
     */
    public function testSetExpBiens3() {

        $obj = new DecTva3519();

        $obj->setExpBiens3(10.092018);
        $this->assertEquals(10.092018, $obj->getExpBiens3());
    }

    /**
     * Tests the setExpBiens4() method.
     *
     * @return void
     */
    public function testSetExpBiens4() {

        $obj = new DecTva3519();

        $obj->setExpBiens4(10.092018);
        $this->assertEquals(10.092018, $obj->getExpBiens4());
    }

    /**
     * Tests the setExpBiensTotal() method.
     *
     * @return void
     */
    public function testSetExpBiensTotal() {

        $obj = new DecTva3519();

        $obj->setExpBiensTotal(10.092018);
        $this->assertEquals(10.092018, $obj->getExpBiensTotal());
    }

    /**
     * Tests the setExpPeriodes() method.
     *
     * @return void
     */
    public function testSetExpPeriodes() {

        $obj = new DecTva3519();

        $obj->setExpPeriodes("expPeriodes");
        $this->assertEquals("expPeriodes", $obj->getExpPeriodes());
    }

    /**
     * Tests the setIban() method.
     *
     * @return void
     */
    public function testSetIban() {

        $obj = new DecTva3519();

        $obj->setIban("iban");
        $this->assertEquals("iban", $obj->getIban());
    }

    /**
     * Tests the setIntracom1() method.
     *
     * @return void
     */
    public function testSetIntracom1() {

        $obj = new DecTva3519();

        $obj->setIntracom1(10.092018);
        $this->assertEquals(10.092018, $obj->getIntracom1());
    }

    /**
     * Tests the setIntracom2() method.
     *
     * @return void
     */
    public function testSetIntracom2() {

        $obj = new DecTva3519();

        $obj->setIntracom2(10.092018);
        $this->assertEquals(10.092018, $obj->getIntracom2());
    }

    /**
     * Tests the setIntracom3() method.
     *
     * @return void
     */
    public function testSetIntracom3() {

        $obj = new DecTva3519();

        $obj->setIntracom3(10.092018);
        $this->assertEquals(10.092018, $obj->getIntracom3());
    }

    /**
     * Tests the setIntracom4() method.
     *
     * @return void
     */
    public function testSetIntracom4() {

        $obj = new DecTva3519();

        $obj->setIntracom4(10.092018);
        $this->assertEquals(10.092018, $obj->getIntracom4());
    }

    /**
     * Tests the setIntracomTotal() method.
     *
     * @return void
     */
    public function testSetIntracomTotal() {

        $obj = new DecTva3519();

        $obj->setIntracomTotal(10.092018);
        $this->assertEquals(10.092018, $obj->getIntracomTotal());
    }

    /**
     * Tests the setMois1() method.
     *
     * @return void
     */
    public function testSetMois1() {

        $obj = new DecTva3519();

        $obj->setMois1(10);
        $this->assertEquals(10, $obj->getMois1());
    }

    /**
     * Tests the setMois2() method.
     *
     * @return void
     */
    public function testSetMois2() {

        $obj = new DecTva3519();

        $obj->setMois2(10);
        $this->assertEquals(10, $obj->getMois2());
    }

    /**
     * Tests the setMois3() method.
     *
     * @return void
     */
    public function testSetMois3() {

        $obj = new DecTva3519();

        $obj->setMois3(10);
        $this->assertEquals(10, $obj->getMois3());
    }

    /**
     * Tests the setMontant1() method.
     *
     * @return void
     */
    public function testSetMontant1() {

        $obj = new DecTva3519();

        $obj->setMontant1(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant1());
    }

    /**
     * Tests the setMontant2() method.
     *
     * @return void
     */
    public function testSetMontant2() {

        $obj = new DecTva3519();

        $obj->setMontant2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant2());
    }

    /**
     * Tests the setMontant3() method.
     *
     * @return void
     */
    public function testSetMontant3() {

        $obj = new DecTva3519();

        $obj->setMontant3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant3());
    }

    /**
     * Tests the setMontantRbt() method.
     *
     * @return void
     */
    public function testSetMontantRbt() {

        $obj = new DecTva3519();

        $obj->setMontantRbt(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantRbt());
    }

    /**
     * Tests the setNationalite() method.
     *
     * @return void
     */
    public function testSetNationalite() {

        $obj = new DecTva3519();

        $obj->setNationalite(10);
        $this->assertEquals(10, $obj->getNationalite());
    }

    /**
     * Tests the setNomPrenom() method.
     *
     * @return void
     */
    public function testSetNomPrenom() {

        $obj = new DecTva3519();

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

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new DecTva3519();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests the setPlafondRbt() method.
     *
     * @return void
     */
    public function testSetPlafondRbt() {

        $obj = new DecTva3519();

        $obj->setPlafondRbt(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafondRbt());
    }

    /**
     * Tests the setQualite() method.
     *
     * @return void
     */
    public function testSetQualite() {

        $obj = new DecTva3519();

        $obj->setQualite("qualite");
        $this->assertEquals("qualite", $obj->getQualite());
    }

    /**
     * Tests the setRbtDemande() method.
     *
     * @return void
     */
    public function testSetRbtDemande() {

        $obj = new DecTva3519();

        $obj->setRbtDemande(10.092018);
        $this->assertEquals(10.092018, $obj->getRbtDemande());
    }

    /**
     * Tests the setReportCredit() method.
     *
     * @return void
     */
    public function testSetReportCredit() {

        $obj = new DecTva3519();

        $obj->setReportCredit(10.092018);
        $this->assertEquals(10.092018, $obj->getReportCredit());
    }

    /**
     * Tests the setRib() method.
     *
     * @return void
     */
    public function testSetRib() {

        $obj = new DecTva3519();

        $obj->setRib("rib");
        $this->assertEquals("rib", $obj->getRib());
    }

    /**
     * Tests the setTauxTva1() method.
     *
     * @return void
     */
    public function testSetTauxTva1() {

        $obj = new DecTva3519();

        $obj->setTauxTva1(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTva1());
    }

    /**
     * Tests the setTauxTva2() method.
     *
     * @return void
     */
    public function testSetTauxTva2() {

        $obj = new DecTva3519();

        $obj->setTauxTva2(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTva2());
    }

    /**
     * Tests the setTauxTva3() method.
     *
     * @return void
     */
    public function testSetTauxTva3() {

        $obj = new DecTva3519();

        $obj->setTauxTva3(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTva3());
    }

    /**
     * Tests the setTauxTva4() method.
     *
     * @return void
     */
    public function testSetTauxTva4() {

        $obj = new DecTva3519();

        $obj->setTauxTva4(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTva4());
    }

    /**
     * Tests the setTotalColonne1() method.
     *
     * @return void
     */
    public function testSetTotalColonne1() {

        $obj = new DecTva3519();

        $obj->setTotalColonne1(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalColonne1());
    }

    /**
     * Tests the setTotalColonne2() method.
     *
     * @return void
     */
    public function testSetTotalColonne2() {

        $obj = new DecTva3519();

        $obj->setTotalColonne2(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalColonne2());
    }

    /**
     * Tests the setTotalColonne3() method.
     *
     * @return void
     */
    public function testSetTotalColonne3() {

        $obj = new DecTva3519();

        $obj->setTotalColonne3(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalColonne3());
    }

    /**
     * Tests the setTotalColonne4() method.
     *
     * @return void
     */
    public function testSetTotalColonne4() {

        $obj = new DecTva3519();

        $obj->setTotalColonne4(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalColonne4());
    }

    /**
     * Tests the setTotalColonne5() method.
     *
     * @return void
     */
    public function testSetTotalColonne5() {

        $obj = new DecTva3519();

        $obj->setTotalColonne5(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalColonne5());
    }

    /**
     * Tests the setTvaFictive1() method.
     *
     * @return void
     */
    public function testSetTvaFictive1() {

        $obj = new DecTva3519();

        $obj->setTvaFictive1(10.092018);
        $this->assertEquals(10.092018, $obj->getTvaFictive1());
    }

    /**
     * Tests the setTvaFictive2() method.
     *
     * @return void
     */
    public function testSetTvaFictive2() {

        $obj = new DecTva3519();

        $obj->setTvaFictive2(10.092018);
        $this->assertEquals(10.092018, $obj->getTvaFictive2());
    }

    /**
     * Tests the setTvaFictive3() method.
     *
     * @return void
     */
    public function testSetTvaFictive3() {

        $obj = new DecTva3519();

        $obj->setTvaFictive3(10.092018);
        $this->assertEquals(10.092018, $obj->getTvaFictive3());
    }

    /**
     * Tests the setTvaFictive4() method.
     *
     * @return void
     */
    public function testSetTvaFictive4() {

        $obj = new DecTva3519();

        $obj->setTvaFictive4(10.092018);
        $this->assertEquals(10.092018, $obj->getTvaFictive4());
    }

    /**
     * Tests the setTvaFictive5() method.
     *
     * @return void
     */
    public function testSetTvaFictive5() {

        $obj = new DecTva3519();

        $obj->setTvaFictive5(10.092018);
        $this->assertEquals(10.092018, $obj->getTvaFictive5());
    }

    /**
     * Tests the setTvaFictivePrec() method.
     *
     * @return void
     */
    public function testSetTvaFictivePrec() {

        $obj = new DecTva3519();

        $obj->setTvaFictivePrec(10.092018);
        $this->assertEquals(10.092018, $obj->getTvaFictivePrec());
    }

    /**
     * Tests the setTvaFictivePres() method.
     *
     * @return void
     */
    public function testSetTvaFictivePres() {

        $obj = new DecTva3519();

        $obj->setTvaFictivePres(10.092018);
        $this->assertEquals(10.092018, $obj->getTvaFictivePres());
    }

    /**
     * Tests the setTypeDemande() method.
     *
     * @return void
     */
    public function testSetTypeDemande() {

        $obj = new DecTva3519();

        $obj->setTypeDemande(10);
        $this->assertEquals(10, $obj->getTypeDemande());
    }

    /**
     * Tests the setVille() method.
     *
     * @return void
     */
    public function testSetVille() {

        $obj = new DecTva3519();

        $obj->setVille("ville");
        $this->assertEquals("ville", $obj->getVille());
    }
}
