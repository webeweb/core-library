<?php

declare(strict_types = 1);

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
use WBW\Library\Quadratus\Model\QCompta\DecTva3519;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Dec tva3519 test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class DecTva3519Test extends AbstractTestCase {

    /**
     * Test setAutresOpe1()
     *
     * @return void
     */
    public function testSetAutresOpe1(): void {

        $obj = new DecTva3519();

        $obj->setAutresOpe1(10.092018);
        $this->assertEquals(10.092018, $obj->getAutresOpe1());
    }

    /**
     * Test setAutresOpe2()
     *
     * @return void
     */
    public function testSetAutresOpe2(): void {

        $obj = new DecTva3519();

        $obj->setAutresOpe2(10.092018);
        $this->assertEquals(10.092018, $obj->getAutresOpe2());
    }

    /**
     * Test setAutresOpe3()
     *
     * @return void
     */
    public function testSetAutresOpe3(): void {

        $obj = new DecTva3519();

        $obj->setAutresOpe3(10.092018);
        $this->assertEquals(10.092018, $obj->getAutresOpe3());
    }

    /**
     * Test setAutresOpe4()
     *
     * @return void
     */
    public function testSetAutresOpe4(): void {

        $obj = new DecTva3519();

        $obj->setAutresOpe4(10.092018);
        $this->assertEquals(10.092018, $obj->getAutresOpe4());
    }

    /**
     * Test setAutresOpeTotal()
     *
     * @return void
     */
    public function testSetAutresOpeTotal(): void {

        $obj = new DecTva3519();

        $obj->setAutresOpeTotal(10.092018);
        $this->assertEquals(10.092018, $obj->getAutresOpeTotal());
    }

    /**
     * Test setBic()
     *
     * @return void
     */
    public function testSetBic(): void {

        $obj = new DecTva3519();

        $obj->setBic("bic");
        $this->assertEquals("bic", $obj->getBic());
    }

    /**
     * Test setCommentaires1()
     *
     * @return void
     */
    public function testSetCommentaires1(): void {

        $obj = new DecTva3519();

        $obj->setCommentaires1("commentaires1");
        $this->assertEquals("commentaires1", $obj->getCommentaires1());
    }

    /**
     * Test setCommentaires2()
     *
     * @return void
     */
    public function testSetCommentaires2(): void {

        $obj = new DecTva3519();

        $obj->setCommentaires2("commentaires2");
        $this->assertEquals("commentaires2", $obj->getCommentaires2());
    }

    /**
     * Test setCommentaires3()
     *
     * @return void
     */
    public function testSetCommentaires3(): void {

        $obj = new DecTva3519();

        $obj->setCommentaires3("commentaires3");
        $this->assertEquals("commentaires3", $obj->getCommentaires3());
    }

    /**
     * Test setCommentaires4()
     *
     * @return void
     */
    public function testSetCommentaires4(): void {

        $obj = new DecTva3519();

        $obj->setCommentaires4("commentaires4");
        $this->assertEquals("commentaires4", $obj->getCommentaires4());
    }

    /**
     * Test setCommentaires5()
     *
     * @return void
     */
    public function testSetCommentaires5(): void {

        $obj = new DecTva3519();

        $obj->setCommentaires5("commentaires5");
        $this->assertEquals("commentaires5", $obj->getCommentaires5());
    }

    /**
     * Test setCreditCompte()
     *
     * @return void
     */
    public function testSetCreditCompte(): void {

        $obj = new DecTva3519();

        $obj->setCreditCompte(true);
        $this->assertTrue($obj->getCreditCompte());
    }

    /**
     * Test setCreditImputer()
     *
     * @return void
     */
    public function testSetCreditImputer(): void {

        $obj = new DecTva3519();

        $obj->setCreditImputer(true);
        $this->assertTrue($obj->getCreditImputer());
    }

    /**
     * Test setCreditNonRemb()
     *
     * @return void
     */
    public function testSetCreditNonRemb(): void {

        $obj = new DecTva3519();

        $obj->setCreditNonRemb(10.092018);
        $this->assertEquals(10.092018, $obj->getCreditNonRemb());
    }

    /**
     * Test setDateCession()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateCession(): void {

        // Set a Date/time mock.
        $dateCession = new DateTime("2018-09-10");

        $obj = new DecTva3519();

        $obj->setDateCession($dateCession);
        $this->assertSame($dateCession, $obj->getDateCession());
    }

    /**
     * Test setDateCreation()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateCreation(): void {

        // Set a Date/time mock.
        $dateCreation = new DateTime("2018-09-10");

        $obj = new DecTva3519();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
    }

    /**
     * Test setDateDemande()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateDemande(): void {

        // Set a Date/time mock.
        $dateDemande = new DateTime("2018-09-10");

        $obj = new DecTva3519();

        $obj->setDateDemande($dateDemande);
        $this->assertSame($dateDemande, $obj->getDateDemande());
    }

    /**
     * Test setExpBiens1()
     *
     * @return void
     */
    public function testSetExpBiens1(): void {

        $obj = new DecTva3519();

        $obj->setExpBiens1(10.092018);
        $this->assertEquals(10.092018, $obj->getExpBiens1());
    }

    /**
     * Test setExpBiens2()
     *
     * @return void
     */
    public function testSetExpBiens2(): void {

        $obj = new DecTva3519();

        $obj->setExpBiens2(10.092018);
        $this->assertEquals(10.092018, $obj->getExpBiens2());
    }

    /**
     * Test setExpBiens3()
     *
     * @return void
     */
    public function testSetExpBiens3(): void {

        $obj = new DecTva3519();

        $obj->setExpBiens3(10.092018);
        $this->assertEquals(10.092018, $obj->getExpBiens3());
    }

    /**
     * Test setExpBiens4()
     *
     * @return void
     */
    public function testSetExpBiens4(): void {

        $obj = new DecTva3519();

        $obj->setExpBiens4(10.092018);
        $this->assertEquals(10.092018, $obj->getExpBiens4());
    }

    /**
     * Test setExpBiensTotal()
     *
     * @return void
     */
    public function testSetExpBiensTotal(): void {

        $obj = new DecTva3519();

        $obj->setExpBiensTotal(10.092018);
        $this->assertEquals(10.092018, $obj->getExpBiensTotal());
    }

    /**
     * Test setExpPeriodes()
     *
     * @return void
     */
    public function testSetExpPeriodes(): void {

        $obj = new DecTva3519();

        $obj->setExpPeriodes("expPeriodes");
        $this->assertEquals("expPeriodes", $obj->getExpPeriodes());
    }

    /**
     * Test setIban()
     *
     * @return void
     */
    public function testSetIban(): void {

        $obj = new DecTva3519();

        $obj->setIban("iban");
        $this->assertEquals("iban", $obj->getIban());
    }

    /**
     * Test setIntracom1()
     *
     * @return void
     */
    public function testSetIntracom1(): void {

        $obj = new DecTva3519();

        $obj->setIntracom1(10.092018);
        $this->assertEquals(10.092018, $obj->getIntracom1());
    }

    /**
     * Test setIntracom2()
     *
     * @return void
     */
    public function testSetIntracom2(): void {

        $obj = new DecTva3519();

        $obj->setIntracom2(10.092018);
        $this->assertEquals(10.092018, $obj->getIntracom2());
    }

    /**
     * Test setIntracom3()
     *
     * @return void
     */
    public function testSetIntracom3(): void {

        $obj = new DecTva3519();

        $obj->setIntracom3(10.092018);
        $this->assertEquals(10.092018, $obj->getIntracom3());
    }

    /**
     * Test setIntracom4()
     *
     * @return void
     */
    public function testSetIntracom4(): void {

        $obj = new DecTva3519();

        $obj->setIntracom4(10.092018);
        $this->assertEquals(10.092018, $obj->getIntracom4());
    }

    /**
     * Test setIntracomTotal()
     *
     * @return void
     */
    public function testSetIntracomTotal(): void {

        $obj = new DecTva3519();

        $obj->setIntracomTotal(10.092018);
        $this->assertEquals(10.092018, $obj->getIntracomTotal());
    }

    /**
     * Test setMois1()
     *
     * @return void
     */
    public function testSetMois1(): void {

        $obj = new DecTva3519();

        $obj->setMois1(10);
        $this->assertEquals(10, $obj->getMois1());
    }

    /**
     * Test setMois2()
     *
     * @return void
     */
    public function testSetMois2(): void {

        $obj = new DecTva3519();

        $obj->setMois2(10);
        $this->assertEquals(10, $obj->getMois2());
    }

    /**
     * Test setMois3()
     *
     * @return void
     */
    public function testSetMois3(): void {

        $obj = new DecTva3519();

        $obj->setMois3(10);
        $this->assertEquals(10, $obj->getMois3());
    }

    /**
     * Test setMontant1()
     *
     * @return void
     */
    public function testSetMontant1(): void {

        $obj = new DecTva3519();

        $obj->setMontant1(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant1());
    }

    /**
     * Test setMontant2()
     *
     * @return void
     */
    public function testSetMontant2(): void {

        $obj = new DecTva3519();

        $obj->setMontant2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant2());
    }

    /**
     * Test setMontant3()
     *
     * @return void
     */
    public function testSetMontant3(): void {

        $obj = new DecTva3519();

        $obj->setMontant3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant3());
    }

    /**
     * Test setMontantRbt()
     *
     * @return void
     */
    public function testSetMontantRbt(): void {

        $obj = new DecTva3519();

        $obj->setMontantRbt(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantRbt());
    }

    /**
     * Test setNationalite()
     *
     * @return void
     */
    public function testSetNationalite(): void {

        $obj = new DecTva3519();

        $obj->setNationalite(10);
        $this->assertEquals(10, $obj->getNationalite());
    }

    /**
     * Test setNomPrenom()
     *
     * @return void
     */
    public function testSetNomPrenom(): void {

        $obj = new DecTva3519();

        $obj->setNomPrenom("nomPrenom");
        $this->assertEquals("nomPrenom", $obj->getNomPrenom());
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

        $obj = new DecTva3519();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Test setPlafondRbt()
     *
     * @return void
     */
    public function testSetPlafondRbt(): void {

        $obj = new DecTva3519();

        $obj->setPlafondRbt(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafondRbt());
    }

    /**
     * Test setQualite()
     *
     * @return void
     */
    public function testSetQualite(): void {

        $obj = new DecTva3519();

        $obj->setQualite("qualite");
        $this->assertEquals("qualite", $obj->getQualite());
    }

    /**
     * Test setRbtDemande()
     *
     * @return void
     */
    public function testSetRbtDemande(): void {

        $obj = new DecTva3519();

        $obj->setRbtDemande(10.092018);
        $this->assertEquals(10.092018, $obj->getRbtDemande());
    }

    /**
     * Test setReportCredit()
     *
     * @return void
     */
    public function testSetReportCredit(): void {

        $obj = new DecTva3519();

        $obj->setReportCredit(10.092018);
        $this->assertEquals(10.092018, $obj->getReportCredit());
    }

    /**
     * Test setRib()
     *
     * @return void
     */
    public function testSetRib(): void {

        $obj = new DecTva3519();

        $obj->setRib("rib");
        $this->assertEquals("rib", $obj->getRib());
    }

    /**
     * Test setTauxTva1()
     *
     * @return void
     */
    public function testSetTauxTva1(): void {

        $obj = new DecTva3519();

        $obj->setTauxTva1(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTva1());
    }

    /**
     * Test setTauxTva2()
     *
     * @return void
     */
    public function testSetTauxTva2(): void {

        $obj = new DecTva3519();

        $obj->setTauxTva2(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTva2());
    }

    /**
     * Test setTauxTva3()
     *
     * @return void
     */
    public function testSetTauxTva3(): void {

        $obj = new DecTva3519();

        $obj->setTauxTva3(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTva3());
    }

    /**
     * Test setTauxTva4()
     *
     * @return void
     */
    public function testSetTauxTva4(): void {

        $obj = new DecTva3519();

        $obj->setTauxTva4(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTva4());
    }

    /**
     * Test setTotalColonne1()
     *
     * @return void
     */
    public function testSetTotalColonne1(): void {

        $obj = new DecTva3519();

        $obj->setTotalColonne1(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalColonne1());
    }

    /**
     * Test setTotalColonne2()
     *
     * @return void
     */
    public function testSetTotalColonne2(): void {

        $obj = new DecTva3519();

        $obj->setTotalColonne2(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalColonne2());
    }

    /**
     * Test setTotalColonne3()
     *
     * @return void
     */
    public function testSetTotalColonne3(): void {

        $obj = new DecTva3519();

        $obj->setTotalColonne3(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalColonne3());
    }

    /**
     * Test setTotalColonne4()
     *
     * @return void
     */
    public function testSetTotalColonne4(): void {

        $obj = new DecTva3519();

        $obj->setTotalColonne4(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalColonne4());
    }

    /**
     * Test setTotalColonne5()
     *
     * @return void
     */
    public function testSetTotalColonne5(): void {

        $obj = new DecTva3519();

        $obj->setTotalColonne5(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalColonne5());
    }

    /**
     * Test setTvaFictive1()
     *
     * @return void
     */
    public function testSetTvaFictive1(): void {

        $obj = new DecTva3519();

        $obj->setTvaFictive1(10.092018);
        $this->assertEquals(10.092018, $obj->getTvaFictive1());
    }

    /**
     * Test setTvaFictive2()
     *
     * @return void
     */
    public function testSetTvaFictive2(): void {

        $obj = new DecTva3519();

        $obj->setTvaFictive2(10.092018);
        $this->assertEquals(10.092018, $obj->getTvaFictive2());
    }

    /**
     * Test setTvaFictive3()
     *
     * @return void
     */
    public function testSetTvaFictive3(): void {

        $obj = new DecTva3519();

        $obj->setTvaFictive3(10.092018);
        $this->assertEquals(10.092018, $obj->getTvaFictive3());
    }

    /**
     * Test setTvaFictive4()
     *
     * @return void
     */
    public function testSetTvaFictive4(): void {

        $obj = new DecTva3519();

        $obj->setTvaFictive4(10.092018);
        $this->assertEquals(10.092018, $obj->getTvaFictive4());
    }

    /**
     * Test setTvaFictive5()
     *
     * @return void
     */
    public function testSetTvaFictive5(): void {

        $obj = new DecTva3519();

        $obj->setTvaFictive5(10.092018);
        $this->assertEquals(10.092018, $obj->getTvaFictive5());
    }

    /**
     * Test setTvaFictivePrec()
     *
     * @return void
     */
    public function testSetTvaFictivePrec(): void {

        $obj = new DecTva3519();

        $obj->setTvaFictivePrec(10.092018);
        $this->assertEquals(10.092018, $obj->getTvaFictivePrec());
    }

    /**
     * Test setTvaFictivePres()
     *
     * @return void
     */
    public function testSetTvaFictivePres(): void {

        $obj = new DecTva3519();

        $obj->setTvaFictivePres(10.092018);
        $this->assertEquals(10.092018, $obj->getTvaFictivePres());
    }

    /**
     * Test setTypeDemande()
     *
     * @return void
     */
    public function testSetTypeDemande(): void {

        $obj = new DecTva3519();

        $obj->setTypeDemande(10);
        $this->assertEquals(10, $obj->getTypeDemande());
    }

    /**
     * Test setVille()
     *
     * @return void
     */
    public function testSetVille(): void {

        $obj = new DecTva3519();

        $obj->setVille("ville");
        $this->assertEquals("ville", $obj->getVille());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
}
